@if($errors->has('nombre'))
    <div class="form-group has-error">
        <div class="help-block">
            {{ $errors->first('nombre') }}
        </div>
        @else
            <div class="form-group">
                @endif
                {!! Form::label('nombre', 'Nombre', ['class' => 'control-label']) !!}
                {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
            </div>
            @if($errors->has('apellido_paterno'))
                <div class="form-group has-error">
                    <div class="help-block">
                        {{ $errors->first('apellido_paterno') }}
                    </div>
                    @else
                        <div class="form-group">
                            @endif
                            {!! Form::label('apellido_paterno', 'Apellido Paterno', ['class' => 'control-label']) !!}
                            {!! Form::text('apellido_paterno', null, ['class' => 'form-control']) !!}
                        </div>
                        @if($errors->has('apellido_materno'))
                            <div class="form-group has-error">
                                <div class="help-block">
                                    {{ $errors->first('apellido_materno') }}
                                </div>
                                @else
                                    <div class="form-group">
                                        @endif
                                        {!! Form::label('apellido_materno', 'Apellido materno', ['class' => 'control-label']) !!}
                                        {!! Form::text('apellido_materno', null, ['class' => 'form-control']) !!}
                                    </div>
                                    @if($errors->has('email'))
                                        <div class="form-group has-error">
                                            <div class="help-block">
                                                {{ $errors->first('email') }}
                                            </div>
                                            @else
                                                <div class="form-group">
                                                    @endif
                                                    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                                                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                                </div>
                                                @if($errors->has('foto'))
                                                    <div class="form-group has-error">
                                                        <div class="help-block">
                                                            {{ $errors->first('foto') }}
                                                        </div>
                                                        @else
                                                            <div class="form-group">
                                                                @endif
                                                                {!! Form::label('foto', 'Foto', ['class' => 'control-label']) !!}
                                                                {!! Form::file('foto') !!}
                                                            </div>