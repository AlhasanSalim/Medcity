{!! Form::open(['route' => ['doctors.force-delete', $doctor->id], 'method' => 'delete']) !!}
    @include('dashboard.doctors.doctors-buttons.delete')
{!! Form::close() !!}
