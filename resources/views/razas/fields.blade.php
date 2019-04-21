<!-- Raza Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('raza_nombre', 'Raza Nombre:') !!}
    {!! Form::text('raza_nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Especies Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('especies_id', 'Especies Id:') !!}
    {!! Form::select('especies_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('razas.index') !!}" class="btn btn-default">Cancel</a>
</div>
