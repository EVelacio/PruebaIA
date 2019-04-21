<!-- User Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_nombre', 'User Nombre:') !!}
    {!! Form::text('user_nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- User Apellido Paterno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_apellido_paterno', 'User Apellido Paterno:') !!}
    {!! Form::text('user_apellido_paterno', null, ['class' => 'form-control']) !!}
</div>

<!-- User Apellido Materno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_apellido_materno', 'User Apellido Materno:') !!}
    {!! Form::text('user_apellido_materno', null, ['class' => 'form-control']) !!}
</div>

<!-- User Edad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_edad', 'User Edad:') !!}
    {!! Form::date('user_edad', null, ['class' => 'form-control']) !!}
</div>

<!-- User Calle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_calle', 'User Calle:') !!}
    {!! Form::text('user_calle', null, ['class' => 'form-control']) !!}
</div>

<!-- User Numext Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_numext', 'User Numext:') !!}
    {!! Form::number('user_numext', null, ['class' => 'form-control']) !!}
</div>

<!-- User Clolonia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_clolonia', 'User Clolonia:') !!}
    {!! Form::text('user_clolonia', null, ['class' => 'form-control']) !!}
</div>

<!-- User Cp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_cp', 'User Cp:') !!}
    {!! Form::number('user_cp', null, ['class' => 'form-control']) !!}
</div>

<!-- User Tel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_tel', 'User Tel:') !!}
    {!! Form::number('user_tel', null, ['class' => 'form-control']) !!}
</div>

<!-- User Cel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_cel', 'User Cel:') !!}
    {!! Form::number('user_cel', null, ['class' => 'form-control']) !!}
</div>

<!-- User Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_email', 'User Email:') !!}
    {!! Form::email('user_email', null, ['class' => 'form-control']) !!}
</div>

<!-- User Pass Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_pass', 'User Pass:') !!}
    {!! Form::text('user_pass', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Usuarios Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_usuarios_id', 'Tipo Usuarios Id:') !!}
    {!! Form::select('tipo_usuarios_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('usuarios.index') !!}" class="btn btn-default">Cancel</a>
</div>
