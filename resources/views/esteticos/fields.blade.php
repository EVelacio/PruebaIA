<!-- Estetico Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estetico_fecha', 'Estetico Fecha:') !!}
    {!! Form::date('estetico_fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Servicios Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_servicios_id', 'Tipo Servicios Id:') !!}
    {!! Form::select('tipo_servicios_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('esteticos.index') !!}" class="btn btn-default">Cancel</a>
</div>
