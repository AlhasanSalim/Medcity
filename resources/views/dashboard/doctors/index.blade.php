@extends('layouts.dashboard')

@section('title', 'All Doctors')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">All Doctors</li>
@endsection

@section('content')
    <div class="mb-5">
        <a class="btn btn-sm btn-outline-primary mr-2" href="{{ route('doctors.create') }}">
            Create
        </a>

        <a class="btn btn-sm btn-outline-dark" href="{{ route('doctors.trash') }}">
            Trash
        </a>
    </div>

    <form action="{{ URL::current() }}" method="get" class="d-flex justify-content-start">
        <input name="name" type="text" placeholder="Search" value="{{request('name')}}"/>
        <br>
        <button class="btn btn-dark">Filter</button>
    </form>

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
                        @include('dashboard.doctors.buttons.edit')
                    </td>
                    <td>
                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="post">
                            @include('dashboard.doctors.buttons.delete')
                        </form>
                    </td>
                </tr>
            @empty
                <td colspan="8">No docotrs defind.</td>
            @endforelse
        </tbody>
    </table>
    {{-- pagination --}}
    {{  $doctors->links()  }}
@endsection
