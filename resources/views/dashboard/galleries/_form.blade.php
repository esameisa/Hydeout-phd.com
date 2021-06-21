<fieldset>
  <div class="form-body">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="title" class="col-md-3 control-label">Title</label>
          <div class="col-md-9">
            {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control']) !!}
            <div class="error">
                <span style="color:red">    
                    {{ $errors->first('title') }}
                </span>        
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="main_image" class="col-md-3 control-label">Main Image</label>
          <div class="col-md-6">
            {!! Form::file('main_image', old('main_image'), ['class' => 'form-control']) !!}
            <div class="error">
                <span style="color:red">    
                    {{ $errors->first('main_image') }}
                </span>
            </div>
            @if(isset($gallery))
              <img src="{{ $gallery->main_image->url('medium') }}">
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</fieldset>
