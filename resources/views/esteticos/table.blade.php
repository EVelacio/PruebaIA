<table class="table table-responsive" id="esteticos-table">
    <thead>
        <tr>
            <th>Estetico Fecha</th>
        <th>Tipo Servicios Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($esteticos as $estetico)
        <tr>
            <td>{!! $estetico->estetico_fecha !!}</td>
            <td>{!! $estetico->tipo_servicios_id !!}</td>
            <td>
                {!! Form::open(['route' => ['esteticos.destroy', $estetico->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('esteticos.show', [$estetico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('esteticos.edit', [$estetico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>