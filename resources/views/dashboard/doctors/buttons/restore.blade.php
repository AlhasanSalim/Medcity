{!! Form::open(['route' => ['doctor.restore', $doctor->id], 'method' => 'put']) !!}
    {!! Form::submit('Restore', ['class' => 'btn btn-sm btn-outline-info']) !!}
{!! Form::close() !!}
