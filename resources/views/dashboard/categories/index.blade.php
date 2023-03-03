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

        <a class="btn btn-sm btn-outline-dark" href="{{ route('categories.trash') }}">
            Trash
        </a>
    </div>

    @include('dashboard.categories.categories-buttons.filter-input')

    <br>
    <br>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Slug</th>
                <th>Craeted At</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories_all as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>
                        @include('dashboard.categories.categories-buttons.edit')
                    </td>
                    <td>
                        {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete' ]) !!}
                            @include('dashboard.categories.categories-buttons.delete')
                        {!! Form::close() !!}
                    </td>
                </tr>
            @empty
                <td colspan="5">No docotrs defind.</td>
            @endforelse
        </tbody>
    </table>
    {{-- pagination --}}
    {{  $categories_all->links()  }}
@endsection
