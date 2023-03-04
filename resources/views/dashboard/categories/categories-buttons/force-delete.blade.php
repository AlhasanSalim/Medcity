{!! Form::open(['route' => ['categories.force-delete', $category->id], 'method' => 'delete']) !!}
    @include('dashboard.categories.categories-buttons.delete')
{!! Form::close() !!}
