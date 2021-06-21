<fieldset>
  <div class="form-body">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="type" class="col-md-3 control-label">Type</label>
          <div class="col-md-9">
            @if(isset($item->type))
              {{ Form::select('type', ['image' => 'Image', 'video' => 'Youtube'], $item->type == 2 ? 'video' : 'image' , ['id' => 'type', 'class' => 'form-control']) }}
            @else
              {{ Form::select('type', ['image' => 'Image', 'video' => 'Youtube'], null, ['id' => 'type', 'class' => 'form-control']) }}
            @endif
            <div class="error">
                <span style="color:red">    
                    {{ $errors->first('type') }}
                </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="image" class="col-md-3 control-label">Image</label>
          <div class="col-md-6">
            {!! Form::file('media', old('media'), ['id' => 'image', 'class' => 'form-control']) !!}
            <div class="error">
                <span style="color:red">    
                    {{ $errors->first('media') }}
                </span>
            </div>
            @if(isset($item))
              @if($item->type == 1)
                <img src="{{ $item->media->url('medium') }}">
              @endif
            @endif
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="embedded_media" class="col-md-3 control-label">Youtube</label>
          <div class="col-md-9">
            {!! Form::text('embedded_media', null, ['id' => 'embedded_media', 'class' => 'form-control']) !!}
            <div class="error">
                <span style="color:red">    
                    {{ $errors->first('embedded_media') }}
                </span>        
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</fieldset>
