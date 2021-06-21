@extends( 'layouts.dashboard.app' )

@section( 'title' )
    Edit Event | {{ $event->title }}
@stop

@section( 'slug' )
    Edit Event
@stop

@section( 'content' )
<div class="row">
  <div class="portlet light">
    <div class="portlet-body">
      <?php $fields =  $event->toArray();?>
      {!! Form::model($event->toArray(), ['method' => 'PATCH', 'route' => ['events.update', $event->id], 'class' => 'form-horizontal', 'files' => 'true', 'id' => 'event-form']) !!}
          @include('dashboard.events._form')
          @if($event->gallery)
            {{-- @include('dashboard.events._gallery') --}}
            <a class="btn btn-primary center" href="{{ route('events.galleries.edit', [$event->id, $event->gallery->id]) }}">View gallery</a>
          @else
            <a class="btn btn-primary center" href="{{ route('events.galleries.create', $event->id) }}">Create gallery</a>
          @endif
        <div class="row">
          <div class="col-md-9">
            <p class="text-right">
              <button class="btn btn-success">Edit Event</button>
              <a href="{{ URL::to('dashboard/events') }}" class="btn btn-danger">Cancel</a>
            </p>
          </div>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
