<fieldset>
  <div class="form-body">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="title" class="col-md-3 control-label">Title</label>
          <div class="col-md-9">
            {!! Form::text('title', old('title'), ['class' => 'form-control','required' => true]) !!}
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
          <label for="content" class="col-md-3 control-label">Content</label>
          <div class="col-md-9">
            {!! Form::textarea('content', old('content'), ['class' => 'form-control','required' => true]) !!}
            <div class="error">
                <span style="color:red">    
                    {{ $errors->first('content') }}
                </span>    
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="date" class="col-md-3 control-label">Date</label>
          <div class="col-md-6">
            {!! Form::date('date', old('date'), ['class' => 'form-control','required' => true]) !!}
            <div class="error">
                <span style="color:red">    
                    {{ $errors->first('date') }}
                </span>
            </div>
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
            {!! Form::file('image', old('image'), ['class' => 'form-control','required' => true]) !!}
            <div class="error">
                <span style="color:red">    
                    {{ $errors->first('image') }}
                </span>
            </div>
            @if(isset($event))
              <img src="{{ $event->image->url('medium') }}">
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</fieldset>
