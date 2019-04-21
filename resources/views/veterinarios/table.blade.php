<table class="table table-responsive" id="veterinarios-table">
    <thead>
        <tr>
            <th>Vet Cedula</th>
        <th>Usuarios Id</th>
        <th>Horarios Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($veterinarios as $veterinario)
        <tr>
            <td>{!! $veterinario->vet_cedula !!}</td>
            <td>{!! $veterinario->usuarios_id !!}</td>
            <td>{!! $veterinario->horarios_id !!}</td>
            <td>
                {!! Form::open(['route' => ['veterinarios.destroy', $veterinario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('veterinarios.show', [$veterinario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('veterinarios.edit', [$veterinario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>