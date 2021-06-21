@extends('layouts.dashboard.app')

@section('title')
    Edit {{ config('namespace.'.$setting->namespace) }}
@stop

@section('content')
<div class="portlet light">
  <div class="portlet-body">
    {!! Form::model($setting, ['method' => 'PATCH', 'route' => ['settings.update', $setting->id], 'class' => 'form-horizontal', 'files' => 'true','enctype'=>'multipart/form-data']) !!}
      <fieldset>

      <legend>{{ config('namespace.'.$setting->namespace) }} Info</legend>
      <div class="form-body">
        <div class="form-group">
          <label for="name" class="col-md-3 control-label">Name</label>
          <div class="col-md-6">
            {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
            <div class="error">
              {{ $errors->first('name') }}
            </div>
          </div>
        </div>

        @if($setting->type == 'image')
          <div class="form-group">
            <label for="image" class="col-md-3 control-label">Image</label>
            <div class="col-md-6">
              {!! Form::file('value_image', ['class' => 'form-control','image' => '']) !!}
              <div class="error">
                {{ $errors->first('value_image') }}
              </div>
            </div>
          </div>
          @if(isset($setting))
            <div class="text-center">
              <img src="{{ $setting->value_image->url('medium') }}" alt="">
            </div>
            <br>
          @endif
        @elseif($setting->type == 'text')
          <div class="form-group">
            <label for="title1" class="col-md-3 control-label">Value</label>
            <div class="col-md-6">
              {!! Form::text('value', old('value'), ['class' => 'form-control']) !!}
              <div class="error">
                {{ $errors->first('value') }}
              </div>
            </div>
          </div>
        @elseif($setting->type == 'content')
          <div class="form-group">
            <label for="title1" class="col-md-3 control-label">Value</label>
            <div class="col-md-6">
              {{-- {!! Form::text('value', old('value'), ['class' => 'form-control']) !!} --}}
              {{ Form::textarea('value',old('value'),['class' => 'form-control']) }}
              <div class="error">
                {{ $errors->first('value') }}
              </div>
            </div>
          </div>
        @endif 
      </div>
      </fieldset>
      <div class="row">
        <div class="col-md-9">
          <p class="text-right">
            <button class="btn btn-success">Edit {{ config('namespace.'.$setting->namespace) }}</button>
            <a href="{{ route('settings.index').'?namespace='.$setting->namespace }}" class="btn btn-danger">Cancel</a>
          </p>
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
