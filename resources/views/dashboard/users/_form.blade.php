<fieldset>
  <legend>User Info</legend>
  <div class="form-body">
    <div class="form-group">
      <label for="name" class="col-md-3 control-label">Name</label>
      <div class="col-md-6">
        {!! Form::text('name', old('name'), ['class' => 'form-control','required' => true]) !!}
        <div class="error">
          {{ $errors->first('name') }}
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="email" class="col-md-3 control-label">Email</label>
      <div class="col-md-6">
        {{-- {!! Form::text('email', old('email'), ['class' => 'form-control','type' => 'email','required' => true]) !!} --}}
        {!! Form::email('email',old('email'),['class' => 'form-control', 'required' => true]) !!}
        <div class="error">
          {{ $errors->first('email') }}
        </div>
      </div>
    </div>
    <div class="form-group">
    <label for="password" class="col-md-3 control-label">Password</label>
      <div class="col-md-6">
        {{-- {!! Form::text('password', old('password'), ['class' => 'form-control','type' => 'password','required' => true]) !!} --}}
        {!! Form::password('password',['class' => 'form-control','required' => (isset($user)) ? false : true]) !!}
        <div class="error">
          {{ $errors->first('password') }}
        </div>
      </div>
    </div>
    <div class="form-group">
    <label for="password_confirmation" class="col-md-3 control-label">Password Confirmation</label>
      <div class="col-md-6">
        {{-- {!! Form::text('password', old('password'), ['class' => 'form-control','type' => 'password','required' => true]) !!} --}}
        {!! Form::password('password_confirmation',['class' => 'form-control','required' => (isset($user)) ? false : true]) !!}
        <div class="error">
          {{ $errors->first('password_confirmation') }}
        </div>
      </div>
    </div>
  </div>
</fieldset>
