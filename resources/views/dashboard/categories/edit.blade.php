@extends('layouts.dashboard')

@section('title', 'Edit Doctor')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Edit Doctor</li>
@endsection

@section('content')
    {!! Form::open( ['route' => ['categories.update', $category->id], 'method' => 'put'] ) !!}
        @include('dashboard.categories.form')
    {!! Form::close() !!}
@endsection
