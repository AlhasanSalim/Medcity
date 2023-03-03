<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function filter(Request $request, $query) {

        if ($request->has('name') && $request->get('name') != null) {
            $query->where('name', 'LIKE', '%'.$request->get('name').'%');
        }
        return $query;
    }

    public function index(Request $request)
    {
        $categories_all = Category::latest();
        $categories_all = $this->filter($request, $categories_all)->paginate(10);
        return view('dashboard.categories.index', compact('categories_all'));
    }


    public function create()
    {
        return view('dashboard.categories.create');
    }


    protected function validation(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
        ]);

        return $attributes;
    }


    public function store(Request $request)
    {
        // $request->merge([
        //     'slug' => Str::slug($request->post('name'))
        // ]);

        Category::create($this->validation($request) + ['slug' => Str::slug($request->post('name'))]);

        return view('dashboard.categories.index');
    }

    public function show(Category $categoy)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.categories.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category = Category::where('id', '=', $id)->update($this->validation($request));
        return redirect()->route('categories.index');
    }


    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index');
    }

    public function trash() {

        $categories_trashed = Category::onlyTrashed()->paginate(10);
        return view('dashboard.categories.trash', compact('categories_trashed'));
    }

    public function restore($id) {

        $category = Category::onlyTrashed()->findOrFail($id);
        $category->restore();
        return redirect()->route('category.trash');
    }


    public function forceDelete($id) {

        $category = Category::onlyTrashed()->findOrFail($id);
        $category->forceDelete();
        return redirect()->route('categories.trash');
    }
}
