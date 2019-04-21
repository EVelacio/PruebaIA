<!-- Fecha Desde Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_desde', 'Fecha Desde:') !!}
    {!! Form::date('fecha_desde', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Hasta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_hasta', 'Fecha Hasta:') !!}
    {!! Form::date('fecha_hasta', null, ['class' => 'form-control']) !!}
</div>

<!-- Salida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salida', 'Salida:') !!}
    {!! Form::text('salida', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('horarios.index') !!}" class="btn btn-default">Cancel</a>
</div>
