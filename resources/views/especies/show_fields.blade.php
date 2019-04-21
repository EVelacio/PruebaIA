<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $especie->id !!}</p>
</div>

<!-- Especie Nombre Field -->
<div class="form-group">
    {!! Form::label('especie_nombre', 'Especie Nombre:') !!}
    <p>{!! $especie->especie_nombre !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $especie->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $especie->updated_at !!}</p>
</div>

