<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $veterinario->id !!}</p>
</div>

<!-- Vet Cedula Field -->
<div class="form-group">
    {!! Form::label('vet_cedula', 'Vet Cedula:') !!}
    <p>{!! $veterinario->vet_cedula !!}</p>
</div>

<!-- Usuarios Id Field -->
<div class="form-group">
    {!! Form::label('usuarios_id', 'Usuarios Id:') !!}
    <p>{!! $veterinario->usuarios_id !!}</p>
</div>

<!-- Horarios Id Field -->
<div class="form-group">
    {!! Form::label('horarios_id', 'Horarios Id:') !!}
    <p>{!! $veterinario->horarios_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $veterinario->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $veterinario->updated_at !!}</p>
</div>

