<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $raza->id !!}</p>
</div>

<!-- Raza Nombre Field -->
<div class="form-group">
    {!! Form::label('raza_nombre', 'Raza Nombre:') !!}
    <p>{!! $raza->raza_nombre !!}</p>
</div>

<!-- Especies Id Field -->
<div class="form-group">
    {!! Form::label('especies_id', 'Especies Id:') !!}
    <p>{!! $raza->especies_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $raza->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $raza->updated_at !!}</p>
</div>

