@extends( 'layouts.dashboard.app' )

@section( 'title' )
    Create New Event
@stop

@section( 'slug' )
    Create New Event
@stop

@section( 'content' )
<div class="row">
  <div class="portlet light">
    <div class="portlet-body">
      {!! Form::open(['method' => 'POST', 'route' => ['events.store'], 'class' => 'form-horizontal', 'files' => 'true', 'id' => 'event-form']) !!}
          @include('dashboard.events._form')
        <div class="row">
          <div class="col-md-9">
            <p class="text-right">
              <button class="btn btn-success">Create Event</button>
              <a href="{{ URL::to('dashboard/events') }}" class="btn btn-danger">Cancel</a>     
            </p>
          </div>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
