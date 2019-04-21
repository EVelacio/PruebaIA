<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $tipoServicio->id !!}</p>
</div>

<!-- Servicio Tipo Field -->
<div class="form-group">
    {!! Form::label('servicio_tipo', 'Servicio Tipo:') !!}
    <p>{!! $tipoServicio->servicio_tipo !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $tipoServicio->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $tipoServicio->updated_at !!}</p>
</div>

