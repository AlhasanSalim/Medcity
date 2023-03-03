@extends('layouts.dashboard')

@section('title', 'All Categories')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">All Categories</li>
@endsection

@section('content')
    <div class="mb-5">
        <a class="btn btn-sm btn-outline-primary mr-2" href="{{ route('categories.create') }}">
            Create
        </a>

        <a class="btn btn-sm btn-outline-dark" href="#">
            Trash
        </a>
    </div>

    {{-- @include('dashboard.doctors.doctors-buttons.filter-input') --}}

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
            {{-- @forelse ($doctors_all as $doctor) --}}
                <tr>
                    {{-- <td>{{ $doctor->id }}</td>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->phone }}</td>
                    <td>{{ substr($doctor->biograph, 0, 50) }} ... </td>
                    <td>{{ $doctor->speciality }}</td>
                    <td>{{ $doctor->degrees }}</td>
                    <td>{{ $doctor->office }}</td>
                    <td>{{ $doctor->university }}</td>
                    <td>{{ $doctor->created_at }}</td>
                    <td>
                        @include('dashboard.doctors.doctors-buttons.edit')
                    </td>
                    <td>
                        {!! Form::open(['route' => ['doctors.destroy', $doctor->id], 'method' => 'delete' ]) !!}
                            {{-- @include('dashboard.doctors.doctors-buttons.delete') --}}
                        {{-- {!! Form::close() !!} --}}
                    {{-- </td> --}}
                </tr>
            {{-- @empty
                <td colspan="8">No docotrs defind.</td>
            @endforelse --}}
        </tbody>
    </table>
    {{-- pagination --}}
    {{-- {{  $doctors_all->links()  }} --}}
@endsection
