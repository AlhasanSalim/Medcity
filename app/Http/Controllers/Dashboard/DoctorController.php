<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{

    protected function filter($search)
    {
        if (request()->has('name') && request()->get('name') != "") {
            $search = $search->where('name', '=', request()->get('name'));
        }
        return $search;
    }

    public function index()
    {
        $search = new Doctor();
        $doctors = $this->filter($search)->paginate(10);
        return view('dashboard.doctors.index', compact('doctors'));
    }


    public function create()
    {
        return view('dashboard.doctors.create');
    }


    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'phone' => ['required', 'string', 'unique:doctors,phone', 'min:11', 'max:16'],
            'biograph' => ['required', 'string'],
            'speciality' => ['required', 'string', 'max:255'],
            'degrees' => ['required', 'string', 'max:255'],
            'office' => ['required', 'string', 'max:255'],
            'university' => ['required', 'string']
        ]);

        Doctor::create($attributes);

        return redirect()->route('doctors.index');
    }


    public function show(Doctor $doctor)
    {
        //
    }


    public function edit(Doctor $doctor)
    {
        //
    }


    public function update(Request $request, Doctor $doctor)
    {
        //
    }


    public function destroy(Doctor $doctor)
    {
        //
    }

}
