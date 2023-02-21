<div class="form-group">
    {!! Form::label('Doctors`s name') !!}
    {!! Form::text('name', $doctor->name ?? old('name') ?? "", ['class' => 'form-control',
                                                                 'placeholder' => 'Enter Doctor`s name',
                                                                 'style' => 'width: 800px',
                                                                 'required']) !!}
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('Phone') !!}
    {!! Form::text('phone', $doctor->phone ?? old('phone') ?? "", ['class' => 'form-control',
                                                                   'placeholder' => 'Enter Doctor`s Phone number',
                                                                   'style' => 'width: 800px',
                                                                   'required']) !!}
    @error('phone')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('Biograph') !!}
    {!! Form::text('biograph', $doctor->biograph ?? old('biograph') ?? "", ['class' => 'form-control',
                                                                            'placeholder' => 'Enter Doctor`s Biograph',
                                                                            'style' => 'width: 800px',
                                                                            'required']) !!}
    @error('biograph')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('Speciality') !!}
    {!! Form::text('speciality', $doctor->speciality ?? old('speciality') ?? "", ['class' => 'form-control',
                                                                                  'placeholder' => 'Enter Doctor`s Speciality',
                                                                                  'style' => 'width: 800px',
                                                                                  'required']) !!}
    @error('speciality')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('Degrees') !!}
    {!! Form::text('degrees', $doctor->degrees ?? old('degrees') ?? "", ['class' => 'form-control',
                                                                         'placeholder' => 'Enter Doctor`s Degrees',
                                                                         'style' => 'width: 800px',
                                                                         'required']) !!}
    @error('degrees')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('Office') !!}
    {!! Form::text('office', $doctor->office ?? old('office') ?? "", ['class' => 'form-control',
                                                                      'placeholder' => 'Enter Doctor`s Office',
                                                                      'style' => 'width: 800px',
                                                                      'required']) !!}
    @error('office')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('University') !!}
    {!! Form::text('university', $doctor->university ?? old('university') ?? "", ['class' => 'form-control',
                                                                                  'placeholder' => 'Enter Doctor`s University',
                                                                                  'style' => 'width: 800px',
                                                                                  'required']) !!}
    @error('university')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

{!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}


