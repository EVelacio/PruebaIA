<!-- User Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_level', 'User Level:') !!}
    {!! Form::text('user_level', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tipoUsuarios.index') !!}" class="btn btn-default">Cancel</a>
</div>
