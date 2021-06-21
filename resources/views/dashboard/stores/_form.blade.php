<fieldset>
  <legend>Store Info</legend>
  <div class="form-body">
    <div class="form-group">
      <label for="store" class="col-md-3 control-label">Title</label>
      <div class="col-md-6">
        {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
        <div class="error">
          {{ $errors->first('title') }}
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="title1" class="col-md-3 control-label">Content</label>
      <div class="col-md-6">
        {!! Form::text('content', old('content'), ['class' => 'form-control']) !!}
        <div class="error">
          {{ $errors->first('title1') }}
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="photo" class="col-md-3 control-label">Logo</label>
      <div class="col-md-6">
        {!! Form::file('logo', ['class' => 'form-control','image' => '']) !!}
        <div class="error">
          {{ $errors->first('logo') }}
        </div>
      </div>
    </div>
    @if(isset($store))
      <div class="text-center">
        <img src="{{ $store->logo->url('thumb') }}" alt="">
      </div>
      <br>
    @endif
  </div>
</fieldset>
