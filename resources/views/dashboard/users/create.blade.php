@extends('layouts.dashboard.app')

@section('title')
    Create User
@stop

@section('content')
<div class="portlet light">
  <div class="portlet-body">
    {!! Form::open(['method' => 'POST', 'route' => 'users.store', 'class' => 'form-horizontal', 'files'=>'true' ]) !!}
      @include('dashboard.users._form')
        
      <div class="row">
        <div class="col-md-9">
          <p class="text-right">
            <button class="btn btn-success">Create User</button>
            <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
          </p>
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
