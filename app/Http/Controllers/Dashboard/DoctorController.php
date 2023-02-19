<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{

    public function index(Request $request)
    {
        $doctors = Doctor::paginate(10);
        return view('dashboard.doctors.index', compact('doctors'));
    }


    public function create()
    {
        return view('dashboard.doctors.create');
    }


    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'phone' => ['required', 'unique:doctors,phone', 'min:11', 'max:16'],
            'biograph' => ['required'],
            'speciality' => ['required', 'max:255'],
            'degrees' => ['required', 'max:255'],
            'office' => ['required', 'max:255'],
            'university' => ['required']
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
