<table class="table table-responsive" id="usuarios-table">
    <thead>
        <tr>
            <th>User Nombre</th>
        <th>User Apellido Paterno</th>
        <th>User Apellido Materno</th>
        <th>User Edad</th>
        <th>User Calle</th>
        <th>User Numext</th>
        <th>User Clolonia</th>
        <th>User Cp</th>
        <th>User Tel</th>
        <th>User Cel</th>
        <th>User Email</th>
        <th>User Pass</th>
        <th>Tipo Usuarios Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{!! $usuario->user_nombre !!}</td>
            <td>{!! $usuario->user_apellido_paterno !!}</td>
            <td>{!! $usuario->user_apellido_materno !!}</td>
            <td>{!! $usuario->user_edad !!}</td>
            <td>{!! $usuario->user_calle !!}</td>
            <td>{!! $usuario->user_numext !!}</td>
            <td>{!! $usuario->user_clolonia !!}</td>
            <td>{!! $usuario->user_cp !!}</td>
            <td>{!! $usuario->user_tel !!}</td>
            <td>{!! $usuario->user_cel !!}</td>
            <td>{!! $usuario->user_email !!}</td>
            <td>{!! $usuario->user_pass !!}</td>
            <td>{!! $usuario->tipo_usuarios_id !!}</td>
            <td>
                {!! Form::open(['route' => ['usuarios.destroy', $usuario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('usuarios.show', [$usuario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('usuarios.edit', [$usuario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>