<!-- Clinico Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clinico_fecha', 'Clinico Fecha:') !!}
    {!! Form::date('clinico_fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Clinico Evaluacion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('clinico_evaluacion', 'Clinico Evaluacion:') !!}
    {!! Form::textarea('clinico_evaluacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Clinico Tratamiendo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('clinico_tratamiendo', 'Clinico Tratamiendo:') !!}
    {!! Form::textarea('clinico_tratamiendo', null, ['class' => 'form-control']) !!}
</div>

<!-- Veterinarios Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('veterinarios_id', 'Veterinarios Id:') !!}
    {!! Form::select('veterinarios_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clinicos.index') !!}" class="btn btn-default">Cancel</a>
</div>
