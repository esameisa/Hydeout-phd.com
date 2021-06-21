@extends('layouts.dashboard.app')

@section('title')
    Edit Store
@stop

@section('content')
<div class="portlet light">
  <div class="portlet-body">
    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id], 'class' => 'form-horizontal', 'files' => 'true']) !!}
      
      @include('dashboard.users._form')
        
      <div class="row">
        <div class="col-md-9">
          <p class="text-right">
            <button class="btn btn-success">Edit User</button>
            <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
          </p>
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
