<!-- Tipovegetal Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoVegetal_id', 'Tipovegetal Id:') !!}
    {!! Form::number('TipoVegetal_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('areaInfluenciaHasTipoVegetals.index') !!}" class="btn btn-default">Cancel</a>
</div>
