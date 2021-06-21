@extends('layouts.dashboard.app')

@section('title')
    New Gallery
@stop

@section('content')
<div class="portlet light">
  <div class="portlet-body">
    {!! Form::open(['route' => $route, 'class' => 'form-horizontal', 'files' => 'true']) !!}
        @include('dashboard.galleries._form')
      <div class="row">
        <div class="col-md-9">
          <p class="text-right">
            <button class="btn btn-success">Add Gallery</button>
            <a href="{{ URL::to('dashboard/galleries') }}" class="btn btn-danger">Cancel</a>     
          </p>
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
