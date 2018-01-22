<table class="table table-responsive" id="tallers-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Descripcion</th>
        <th>Unidadproduccion Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tallers as $taller)
        <tr>
            <td>{!! $taller->nombre !!}</td>
            <td>{!! $taller->descripcion !!}</td>
            <td>{!! $taller->UnidadProduccion_id !!}</td>
            <td>
                {!! Form::open(['route' => ['tallers.destroy', $taller->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tallers.show', [$taller->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tallers.edit', [$taller->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>