@extends( 'layouts.dashboard.app' )

@section( 'title' )
    Create New media item
@stop

@section( 'slug' )
    Create New media item
@stop

@section( 'content' )
<div class="row">
  <div class="portlet light">
    <div class="portlet-body">
      {!! Form::open(['method' => 'POST', 'route' => ['galleries.items.store', $galleryId], 'class' => 'form-horizontal', 'files' => 'true', 'id' => 'event-form']) !!}
          @include('dashboard.galleryitems._form')
        <div class="row">
          <div class="col-md-9">
            <p class="text-right">
              <button class="btn btn-success">Create media item</button>
              <a href="{{ route('galleries.items.index', $galleryId) }}" class="btn btn-danger">Cancel</a>     
            </p>
          </div>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
