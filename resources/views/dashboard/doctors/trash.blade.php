@extends('layouts.dashboard')
@section('title', 'Trashed Doctors')
@section('breadcrumb')
  @parent
  <li class="breadcrumb-item">Doctors</li>
  <li class="breadcrumb-item active">Trash</li>
@endsection
@section('content')

<div class="mb-5">
    <a class="btn btn-sm btn-outline-primary" href="{{ route('doctors.index') }}">
        Back
    </a>
</div>

@include('dashboard.doctors.buttons.filter-input')

<br>
<br>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Biograph</th>
            <th>Speciality</th>
            <th>Degrees</th>
            <th>Office</th>
            <th>University</th>
            <th>Craeted At</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($doctors as $doctor)
            <tr>
                <td>{{ $doctor->id }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->phone }}</td>
                <td>{{ substr($doctor->biograph, 0, 50) }} ... </td>
                <td>{{ $doctor->speciality }}</td>
                <td>{{ $doctor->degrees }}</td>
                <td>{{ $doctor->office }}</td>
                <td>{{ $doctor->university }}</td>
                <td>{{ $doctor->created_at }}</td>

                <td>
                    @include('dashboard.doctors.buttons.restore')
                </td>


                <td>
                    <form action="{{ route('doctor.force-delete', $doctor->id) }}" method="post">
                       @include('dashboard.doctors.buttons.delete')
                    </form>
                </td>
            </tr>
        @empty
            <td colspan="7">No Doctors defind.</td>
        @endforelse
    </tbody>
</table>

{{ $doctors->links() }}

@endsection
