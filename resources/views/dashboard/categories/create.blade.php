@extends('layouts.dashboard')
@section('title', 'Create Category')
@section('breadcrumb')
@parent
    <li class="breadcrumb-item active">Create Category</li>
@endsection
@section('content')
    {!! Form::open(['route' => 'categories.store']) !!}
        @include('dashboard.categories.form')
    {!! Form::close() !!}
@endsection
