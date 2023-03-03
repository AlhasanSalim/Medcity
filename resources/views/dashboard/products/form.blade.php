@php
 $name = 'name';
 $class = 'form-control';
 $style = 'width: 800px';
 $required = 'required';
@endphp
<div class="form-group">
    {!! Form::label('Doctors`s name') !!}
    {!! Form::text($name, $doctor->name ?? old($name) ?? "", ['class' => $class,
                                                              'placeholder' => 'Enter Doctor`s name',
                                                              'style' => $style,
                                                              $required
                                                             ]) !!}
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>



@php $phone = 'phone'; @endphp
<div class="form-group">
    {!! Form::label('Phone') !!}
    {!! Form::text($phone, $doctor->phone ?? old($phone) ?? "", ['class' => $class,
                                                                 'placeholder' => 'Enter Doctor`s Phone number',
                                                                 'style' => $style,
                                                                 $required
                                                                ]) !!}
    @error($phone)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>



@php $biograph = 'biograph'; @endphp
<div class="form-group">
    {!! Form::label('Biograph') !!}
    {!! Form::text($biograph, $doctor->biograph ?? old($biograph) ?? "", ['class' => $class,
                                                                          'placeholder' => 'Enter Doctor`s Biograph',
                                                                          'style' => $style,
                                                                          $required
                                                                         ]) !!}
    @error($biograph)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>



@php $speciality = 'speciality'; @endphp
<div class="form-group">
    {!! Form::label('Speciality') !!}
    {!! Form::text($speciality, $doctor->speciality ?? old($speciality) ?? "", ['class' => $class,
                                                                                 'placeholder' => 'Enter Doctor`s Speciality',
                                                                                 'style' => $style,
                                                                                 $required
                                                                                ]) !!}
    @error($speciality)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>



@php $degrees = 'degrees'; @endphp
<div class="form-group">
    {!! Form::label('Degrees') !!}
    {!! Form::text($degrees, $doctor->degrees ?? old($degrees) ?? "", ['class' => $class,
                                                                       'placeholder' => 'Enter Doctor`s Degrees',
                                                                       'style' => $style,
                                                                       $required
                                                                      ]) !!}
    @error($degrees)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>



@php $office = 'office'; @endphp
<div class="form-group">
    {!! Form::label('Office') !!}
    {!! Form::text($office, $doctor->office ?? old($office) ?? "", ['class' => $class,
                                                                    'placeholder' => 'Enter Doctor`s Office',
                                                                    'style' => $style,
                                                                    $required
                                                                   ]) !!}
    @error($office)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


@php $university = 'university'; @endphp
<div class="form-group">
    {!! Form::label('University') !!}
    {!! Form::text($university, $doctor->university ?? old($university) ?? "", ['class' => $class,
                                                                                'placeholder' => 'Enter Doctor`s University',
                                                                                'style' => $style,
                                                                                $required
                                                                               ]) !!}
    @error($university)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

{!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}


