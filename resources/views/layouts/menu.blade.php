
<li class="{{ Request::is('tipoUsuarios*') ? 'active' : '' }}">
    <a href="{!! route('tipoUsuarios.index') !!}"><i class="fa fa-edit"></i><span>Tipo Usuarios</span></a>
</li>

<li class="{{ Request::is('tipoServicios*') ? 'active' : '' }}">
    <a href="{!! route('tipoServicios.index') !!}"><i class="fa fa-edit"></i><span>Tipo Servicios</span></a>
</li>

<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
    <a href="{!! route('usuarios.index') !!}"><i class="fa fa-edit"></i><span>Usuarios</span></a>
</li>

<li class="{{ Request::is('esteticos*') ? 'active' : '' }}">
    <a href="{!! route('esteticos.index') !!}"><i class="fa fa-edit"></i><span>Esteticos</span></a>
</li>

<li class="{{ Request::is('horarios*') ? 'active' : '' }}">
    <a href="{!! route('horarios.index') !!}"><i class="fa fa-edit"></i><span>Horarios</span></a>
</li>

<li class="{{ Request::is('veterinarios*') ? 'active' : '' }}">
    <a href="{!! route('veterinarios.index') !!}"><i class="fa fa-edit"></i><span>Veterinarios</span></a>
</li>

<li class="{{ Request::is('secretarias*') ? 'active' : '' }}">
    <a href="{!! route('secretarias.index') !!}"><i class="fa fa-edit"></i><span>Secretarias</span></a>
</li>

<li class="{{ Request::is('clinicos*') ? 'active' : '' }}">
    <a href="{!! route('clinicos.index') !!}"><i class="fa fa-edit"></i><span>Clinicos</span></a>
</li>

<li class="{{ Request::is('especies*') ? 'active' : '' }}">
    <a href="{!! route('especies.index') !!}"><i class="fa fa-edit"></i><span>Especies</span></a>
</li>

<li class="{{ Request::is('razas*') ? 'active' : '' }}">
    <a href="{!! route('razas.index') !!}"><i class="fa fa-edit"></i><span>Razas</span></a>
</li>

<li class="{{ Request::is('mascotas*') ? 'active' : '' }}">
    <a href="{!! route('mascotas.index') !!}"><i class="fa fa-edit"></i><span>Mascotas</span></a>
</li>

