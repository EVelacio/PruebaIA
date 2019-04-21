<table class="table table-responsive" id="secretarias-table">
    <thead>
        <tr>
            <th>Usuarios Id</th>
        <th>Horarios Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($secretarias as $secretaria)
        <tr>
            <td>{!! $secretaria->usuarios_id !!}</td>
            <td>{!! $secretaria->horarios_id !!}</td>
            <td>
                {!! Form::open(['route' => ['secretarias.destroy', $secretaria->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('secretarias.show', [$secretaria->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('secretarias.edit', [$secretaria->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>