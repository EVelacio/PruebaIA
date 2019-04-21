<table class="table table-responsive" id="tipoServicios-table">
    <thead>
        <tr>
            <th>Servicio Tipo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoServicios as $tipoServicio)
        <tr>
            <td>{!! $tipoServicio->servicio_tipo !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoServicios.destroy', $tipoServicio->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoServicios.show', [$tipoServicio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoServicios.edit', [$tipoServicio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>