{!! Form::open(['route' => ['categories.force-delete', $category->id], 'method' => 'delete']) !!}
    @include('dashboard.categories.categories-buttons.force-delete')
{!! Form::close() !!}
