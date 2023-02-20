@extends('layouts.dashboard')

@section('title', 'Edit Doctor')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Edit Doctor</li>
@endsection

@section('content')
    <form method="post" action="{{ route('doctors.update', $doctor->id) }}">
        @csrf
        @method('put')
        @include('dashboard.doctors.form')
    </form>
@endsection
