{!! Form::open(['method' => 'get', 'class' => 'd-flex justify-content-start']) !!}
    {!! Form::text('name', Request::get('name'), ['placeholder' => 'Search for name']) !!}
    {!! Form::text('phone', Request::get('phone'), ['placeholder' => 'Search for phone']) !!}
    {!! Form::text('speciality', Request::get('speciality'), ['placeholder' => 'Search for speciality']) !!}
    {!! Form::submit('Search', ['class' => 'btn btn-dark']) !!}
{!! Form::close() !!}
