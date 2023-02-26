<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{

    // protected function filter($search)
    // {
    //     if (request()->has('name') && request()->get('name') != "") {
    //         $search = $search->where('name', 'LIKE', '%'.request()->get('name').'%');
    //     }

    //     return $search;
    // }


    protected function filter(Request $request, $query) {
        if ($request->has('name') && $request->get('name') != "") {
            $query->where('name', 'LIKE', '%'.$request->get('name').'%');
        }

        if ($request->has('phone') && $request->get('phone') != "") {
            $query->where('phone', 'LIKE', '%'.$request->get('phone').'%');
        }

        if ($request->has('speciality') && $request->get('speciality') != "") {
            $query->where('speciality', 'LIKE', '%'.$request->get('speciality').'%');
        }
        return $query;
    }


    protected function validation(Request $request)
    {
        $attributes = $request->validate([
            'name'       => ['required', 'string', 'min:3', 'max:255'],
            'phone'      => ['required', 'string', 'unique:doctors,phone', 'min:11', 'max:16'],
            'biograph'   => ['required', 'string'],
            'speciality' => ['required', 'string', 'max:255'],
            'degrees'    => ['required', 'string', 'max:255'],
            'office'     => ['required', 'string', 'max:255'],
            'university' => ['required', 'string']
        ]);
        return $attributes;
    }


    public function index(Request $request)
    {

        $doctors_all = Doctor::latest();
        $doctors_all = $this->filter($request,$doctors_all)->paginate(10);
        return view('dashboard.doctors.index', compact('doctors_all'));
    }


    public function create()
    {
        return view('dashboard.doctors.create');
    }


    public function store(Request $request)
    {
        Doctor::create($this->validation($request));
        return redirect()->route('doctors.index');
    }


    public function show(Doctor $doctor)
    {
        //
    }


    public function edit(Doctor $doctor)
    {
        $doctor = Doctor::findOrFail($doctor->id);
        return view('dashboard.doctors.edit', compact('doctor'));
    }


    public function update(Request $request, $id)
    {
        Doctor::where('id', '=', $id)->update($this->validation($request));
        return redirect()->route('doctors.index');
    }


    public function destroy($id)
    {
        // Doctor::where('id', '=', $id)->delete();
        // Doctor::destroy($id);

        // Or


        $doctor = Doctor::findOrFail($id);
        $doctor->delete();

        return redirect()->route('doctors.index');
    }


    public function trash()
    {
        $doctors = Doctor::onlyTrashed()->paginate();

        return view('dashboard.doctors.trash', compact('doctors'));
    }

    public function restore($id)
    {
        $doctor = Doctor::onlyTrashed()->findOrFail($id);
        $doctor->restore();

        return redirect()->route('doctors.trash');
    }

    public function forceDelete($id)
    {
        $doctor = Doctor::onlyTrashed()->findOrFail($id);
        $doctor->forceDelete();
        return redirect()->route('doctors.trash');
    }
}
