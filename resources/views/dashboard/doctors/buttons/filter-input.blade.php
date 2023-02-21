{{-- <form action="{{ URL::current() }}" method="get" class="d-flex justify-content-start">
    <input name="name" type="text" placeholder="Search" value="{{request('name')}}"/>
    <br>
    <button class="btn btn-dark">Filter</button>
</form> --}}
{!! Form::open(['method' => 'get', 'class' => 'd-flex justify-content-start']) !!}
    {!! Form::text('name', request('name'), ['placeholder' => 'Search']) !!}
    {!! Form::submit('Search', ['class' => 'btn btn-dark']) !!}
{!! Form::close() !!}
