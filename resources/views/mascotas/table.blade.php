<table class="table table-responsive" id="mascotas-table">
    <thead>
        <tr>
            <th>Mascota Nombre</th>
        <th>Mascota Sexo</th>
        <th>Mascota Color</th>
        <th>Mascota Edad</th>
        <th>Razas Id</th>
        <th>Especies Id</th>
        <th>Esteticos Id</th>
        <th>Clinicos Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($mascotas as $mascota)
        <tr>
            <td>{!! $mascota->mascota_nombre !!}</td>
            <td>{!! $mascota->mascota_sexo !!}</td>
            <td>{!! $mascota->mascota_color !!}</td>
            <td>{!! $mascota->mascota_edad !!}</td>
            <td>{!! $mascota->razas_id !!}</td>
            <td>{!! $mascota->especies_id !!}</td>
            <td>{!! $mascota->esteticos_id !!}</td>
            <td>{!! $mascota->clinicos_id !!}</td>
            <td>
                {!! Form::open(['route' => ['mascotas.destroy', $mascota->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('mascotas.show', [$mascota->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('mascotas.edit', [$mascota->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>