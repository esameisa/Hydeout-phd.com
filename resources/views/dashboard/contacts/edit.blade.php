@extends('layouts.dashboard.app')

@section('title')
    Edit Store
@stop

@section('content')
<div class="portlet light">
  <div class="portlet-body">
    {!! Form::model($contact, ['method' => 'PATCH', 'route' => ['contacts.update', $contact->id], 'class' => 'form-horizontal', 'files' => 'true']) !!}
      
      @include('dashboard.contacts._form')
        
      <div class="row">
        <div class="col-md-9">
          <p class="text-right">
            <button class="btn btn-success">Edit Contact</button>
            <a href="{{ route('contacts.index') }}" class="btn btn-danger">Cancel</a>
          </p>
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
