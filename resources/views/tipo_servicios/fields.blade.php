<!-- Servicio Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('servicio_tipo', 'Servicio Tipo:') !!}
    {!! Form::text('servicio_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tipoServicios.index') !!}" class="btn btn-default">Cancel</a>
</div>
