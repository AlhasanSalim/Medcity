{!! Form::open(['route' => ['doctor.force-delete', $doctor->id], 'method' => 'delete']) !!}
    @include('dashboard.buttons.delete')
{!! Form::close() !!}
