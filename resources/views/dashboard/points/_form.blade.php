<fieldset>
  <legend>Point Info</legend>
  <div class="form-body">
    <div class="form-group">
      <label for="key" class="col-md-3 control-label">Name</label>
      <div class="col-md-6">
        {!! Form::text('name', old('name'), ['class' => 'form-control','required' => true]) !!}
        <div class="error">
          {{ $errors->first('name') }}
        </div>
      </div>
    </div>
    {!! Form::hidden('key',old('old')) !!}
    <div class="form-group">
      <label for="value" class="col-md-3 control-label">Value</label>
      <div class="col-md-6">
        {!! Form::text('value', old('value'), ['class' => 'form-control']) !!}
        <div class="error">
          {{ $errors->first('value') }}
        </div>
      </div>
    </div>
  </div>
</fieldset>
