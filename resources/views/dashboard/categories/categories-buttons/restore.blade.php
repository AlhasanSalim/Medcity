{!! Form::open(['route' => ['categories.restore', $category->id], 'method' => 'put']) !!}
    {!! Form::submit('Restore', ['class' => 'btn btn-sm btn-outline-info']) !!}
{!! Form::close() !!}
