<!-- Vet Cedula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vet_cedula', 'Vet Cedula:') !!}
    {!! Form::text('vet_cedula', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuarios Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuarios_id', 'Usuarios Id:') !!}
    {!! Form::select('usuarios_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Horarios Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horarios_id', 'Horarios Id:') !!}
    {!! Form::select('horarios_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('veterinarios.index') !!}" class="btn btn-default">Cancel</a>
</div>
