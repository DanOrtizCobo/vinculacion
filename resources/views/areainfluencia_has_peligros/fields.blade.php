<!-- Peligros Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Peligros_id', 'Peligros Id:') !!}
    {!! Form::number('Peligros_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('areainfluenciaHasPeligros.index') !!}" class="btn btn-default">Cancelar</a>
</div>
