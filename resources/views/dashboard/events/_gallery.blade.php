<h3>Gallery</h3>

    {{-- <div class="row">
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
            @if(isset($event->gallery))
              <img src="{{ $event->gallery->main_image->url('medium') }}">
            @endif
          </div>
        </div>
      </div>
    </div> --}}
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="image" class="col-md-3 control-label">Add new media</label>
          <div class="col-md-6" id="media-form">
          	<a href="#addMedia" id="addMedia" class="btn blue btn-xs">Add new media</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label class="col-md-3 control-label">Gallery items</label>
          <div class="col-md-6">
            @if(isset($event))
              @foreach($event->galleryitems as $galleryitem)
                <div>
                  @if($galleryitem->type === 1)
                    <img src="{{ $galleryitem->media->url('medium') }}">
                  @elseif($galleryitem->type === 2)
                    <a href="{{ $galleryitem->embedded_media }}">{{ $galleryitem->embedded_media }}</a>
                  @endif
                  <input type="hidden" id="galleryItemId" value="{{ $galleryitem->id }}">
                  <a href="#deleteMedia" id="deleteMedia" class="btn red btn-xs">Delete media</a>
                </div>
              @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>

  </div>


@section('footerscripts')
    <script type="text/javascript">
        requirejs([
            'jquery'
	    ], function ($) {

        var media_count = 0;
        var image_count = 0;

	    	$('#addMedia').click(function() {
	    		var form_group_div = $("<div>", {"class": "form-group"});
                form_group_div.append($("<label>", {for:"media_type", class:"col-md-6 control-label"}));
                var tmp_media_count = media_count;
                var col_div = $("<div>", {"class": "col-md-6"});
                col_div.append('<select id="media_type'+ tmp_media_count +'" class="form-control" name=""><option selected="selected" value="">Pick a type...</option><option value="image">Image</option><option value="video">Video</option></select><input class="form-control" id="media_value'+ tmp_media_count +'" type="hidden" name="media">');
                form_group_div.append(col_div);
                	$('#event-form').append(form_group_div);
                var type_selector = '#media_type' + tmp_media_count;
                $(type_selector).change(function() {
                    var value_selector = '#media_value' + tmp_media_count;
                    if($(this).val() === "image") {
                      $(value_selector).attr( { "name":"images[]", "type":"file" } );
                    }
                    else if($(this).val() === "video") {
                      $(value_selector).attr( { "name":"video_urls[]", "type":"url" } );
                    }
                });
                media_count += 1;
	    	});
	    });
	</script>
@stop
