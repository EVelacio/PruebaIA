<!-- Mascota Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mascota_nombre', 'Mascota Nombre:') !!}
    {!! Form::text('mascota_nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Mascota Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mascota_sexo', 'Mascota Sexo:') !!}
    {!! Form::text('mascota_sexo', null, ['class' => 'form-control']) !!}
</div>

<!-- Mascota Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mascota_color', 'Mascota Color:') !!}
    {!! Form::text('mascota_color', null, ['class' => 'form-control']) !!}
</div>

<!-- Mascota Edad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mascota_edad', 'Mascota Edad:') !!}
    {!! Form::number('mascota_edad', null, ['class' => 'form-control']) !!}
</div>

<!-- Razas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('razas_id', 'Razas Id:') !!}
    {!! Form::select('razas_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Especies Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('especies_id', 'Especies Id:') !!}
    {!! Form::select('especies_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Esteticos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('esteticos_id', 'Esteticos Id:') !!}
    {!! Form::select('esteticos_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Clinicos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clinicos_id', 'Clinicos Id:') !!}
    {!! Form::select('clinicos_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mascotas.index') !!}" class="btn btn-default">Cancel</a>
</div>
