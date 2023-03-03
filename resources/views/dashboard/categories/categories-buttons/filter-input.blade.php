{!! Form::open(['method' => 'get', 'class' => 'd-flex justify-content-start']) !!}
    {!! Form::text('name', Request::get('name'), ['placeholder' => 'Search for name']) !!}
    {!! Form::submit('Search', ['class' => 'btn btn-dark']) !!}
{!! Form::close() !!}
