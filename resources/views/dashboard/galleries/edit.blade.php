@extends( 'layouts.dashboard.app' )

@section( 'title' )
    Edit Gallery | {{ $gallery->title }}
@stop

@section( 'slug' )
    Edit Gallery
@stop

@section( 'content' )
<div class="row">
<div class="portlet light">
    <div class="portlet-body">
      {!! Form::model($gallery, ['method' => 'PATCH', 'route' => $route, 'class' => 'form-horizontal', 'files' => 'true']) !!}
          @include('dashboard.galleries._form')
        <div class="row">
          <div class="col-md-9">
            <p class="text-right">
              <button class="btn btn-success">Edit Gallery</button>
              {{-- <a href="{{ route('events.edit', $gallery->entity->id) }}" class="btn btn-danger">Cancel</a>      --}}
            </p>
          </div>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
