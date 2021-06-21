@extends('layouts.dashboard.app')

@section('title')
    Edit Point
@stop

@section('content')
<div class="portlet light">
  <div class="portlet-body">
    {!! Form::model($point, ['method' => 'PATCH', 'route' => ['points.update', $point->id], 'class' => 'form-horizontal', 'files' => 'true']) !!}
      
      @include('dashboard.points._form')
        
      <div class="row">
        <div class="col-md-9">
          <p class="text-right">
            <button class="btn btn-success">Edit Point</button>
            <a href="{{ route('points.index') }}" class="btn btn-danger">Cancel</a>
          </p>
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
