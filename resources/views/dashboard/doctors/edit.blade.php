@extends('layouts.dashboard')

@section('title', 'Edit Doctor')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Edit Doctor</li>
@endsection

@section('content')
    {!! Form::open( ['route' => ['doctors.update', $doctor->id], 'method' => 'put'] ) !!}
        @include('dashboard.doctors.form')
    {!! Form::close() !!}
@endsection
