@extends('layouts.dashboard')
@section('title', 'Trashed Categories')
@section('breadcrumb')
  @parent
  <li class="breadcrumb-item">Categories</li>
  <li class="breadcrumb-item active">Trash</li>
@endsection
@section('content')

    <div class="mb-5">
        <a class="btn btn-sm btn-outline-primary" href="{{ route('categories.index') }}">
            Back
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
                <th>Slug</th>
                <th>Craeted At</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories_trashed as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->created_at }}</td>

                    <td>
                        {{-- @include('dashboard.categories.categories-buttons.restore') --}}
                    </td>


                    <td>
                        {{-- @include('dashboard.categories.categories-buttons.force-delete') --}}
                    </td>
                </tr>
            @empty
                <td colspan="7">No Categories defind.</td>
            @endforelse
        </tbody>
    </table>

    {{ $categories_trashed->links() }}

@endsection
