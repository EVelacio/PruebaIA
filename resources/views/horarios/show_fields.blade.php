<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $horario->id !!}</p>
</div>

<!-- Fecha Desde Field -->
<div class="form-group">
    {!! Form::label('fecha_desde', 'Fecha Desde:') !!}
    <p>{!! $horario->fecha_desde !!}</p>
</div>

<!-- Fecha Hasta Field -->
<div class="form-group">
    {!! Form::label('fecha_hasta', 'Fecha Hasta:') !!}
    <p>{!! $horario->fecha_hasta !!}</p>
</div>

<!-- Salida Field -->
<div class="form-group">
    {!! Form::label('salida', 'Salida:') !!}
    <p>{!! $horario->salida !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $horario->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $horario->updated_at !!}</p>
</div>

