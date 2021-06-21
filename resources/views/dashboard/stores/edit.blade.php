@extends('layouts.dashboard.app')

@section('title')
    Edit Store
@stop

@section('content')
<div class="portlet light">
  <div class="portlet-body">
    {!! Form::model($store, ['method' => 'PATCH', 'route' => ['stores.update', $store->id], 'class' => 'form-horizontal', 'files' => 'true']) !!}
      
      @include('dashboard.stores._form')
        
      <div class="row">
        <div class="col-md-9">
          <p class="text-right">
            <button class="btn btn-success">Edit Store</button>
            <a href="{{ route('stores.index') }}" class="btn btn-danger">Cancel</a>
          </p>
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
