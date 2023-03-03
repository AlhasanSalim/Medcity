@extends('layouts.dashboard')
@section('title', 'Create Doctor')
@section('breadcrumb')
@parent
    <li class="breadcrumb-item active">Create Doctor</li>
@endsection
@section('content')
    {!! Form::open(['route' => 'doctors.store']) !!}
        @include('dashboard.doctors.form')
    {!! Form::close() !!}
@endsection
