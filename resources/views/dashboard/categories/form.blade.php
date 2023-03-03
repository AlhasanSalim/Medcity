@php
 $name = 'name';
 $class = 'form-control';
 $style = 'width: 800px';
 $required = 'required';
@endphp
<div class="form-group">
    {!! Form::label('Category`s name') !!}
    {!! Form::text($name, $category->name ?? old($name) ?? "", ['class' => $class,
                                                              'placeholder' => 'Enter Doctor`s name',
                                                              'style' => $style,
                                                              $required
                                                             ]) !!}
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>



{!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}


