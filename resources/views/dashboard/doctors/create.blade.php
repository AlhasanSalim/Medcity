@extends('layouts.dashboard')
@section('title', 'Create Doctor')
@section('breadcrumb')
@parent
    <li class="breadcrumb-item active">Create Doctor</li>
@endsection
@section('content')
    <form method="POST" action="{{ route('doctors.store') }}">
        @csrf
        <div class="form-group">
        <label for="exampleInputEmail1">Doctors`s name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Doctor name" style="width: 800px">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone number" style="width: 800px">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Biograph</label>
            <textarea name="biograph" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Biograph" style="width: 800px"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Speciality</label>
            <input type="text" name="speciality" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Speciality" style="width: 800px">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Degrees</label>
            <input type="text" name="degrees" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Degrees" style="width: 800px">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Office</label>
            <input type="text" name="office" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Office" style="width: 800px">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">University</label>
            <input type="text" name="university" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter University" style="width: 800px">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
