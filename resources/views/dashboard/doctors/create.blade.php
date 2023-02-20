@extends('layouts.dashboard')
@section('title', 'Create Doctor')
@section('breadcrumb')
@parent
    <li class="breadcrumb-item active">Create Doctor</li>
@endsection
@section('content')
    <form method="POST" action="{{ route('doctors.store') }}">
        @csrf
        @include('dashboard.doctors.form')
    </form>
@endsection
