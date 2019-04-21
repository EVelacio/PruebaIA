<table class="table table-responsive" id="clinicos-table">
    <thead>
        <tr>
            <th>Clinico Fecha</th>
        <th>Clinico Evaluacion</th>
        <th>Clinico Tratamiendo</th>
        <th>Veterinarios Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clinicos as $clinico)
        <tr>
            <td>{!! $clinico->clinico_fecha !!}</td>
            <td>{!! $clinico->clinico_evaluacion !!}</td>
            <td>{!! $clinico->clinico_tratamiendo !!}</td>
            <td>{!! $clinico->veterinarios_id !!}</td>
            <td>
                {!! Form::open(['route' => ['clinicos.destroy', $clinico->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clinicos.show', [$clinico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clinicos.edit', [$clinico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>