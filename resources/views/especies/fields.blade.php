<!-- Especie Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('especie_nombre', 'Especie Nombre:') !!}
    {!! Form::text('especie_nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('especies.index') !!}" class="btn btn-default">Cancel</a>
</div>
