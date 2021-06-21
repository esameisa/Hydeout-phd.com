@extends( 'layouts.dashboard.app' )

@section( 'title' )
    Edit media item
@stop

@section( 'slug' )
    Edit media item
@stop

@section( 'content' )
<div class="row">
  <div class="portlet light">
    <div class="portlet-body">
        {!! Form::model($item, ['method' => 'PATCH', 'route' => ['galleries.items.update', $galleryId, $item->id], 'class' => 'form-horizontal', 'files' => 'true', 'id' => 'item-form']) !!}

          @include('dashboard.galleryitems._form')

        <div class="row">
          <div class="col-md-9">
            <p class="text-right">
              <button class="btn btn-success">Edit media item</button>
              <a href="{{ route('galleries.items.index', $galleryId) }}" class="btn btn-danger">Cancel</a>     
            </p>
          </div>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
