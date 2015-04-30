@extends('app')

@section('content')
<div class="container" style="padding-top:5%">
    <div class="col-md-4 col-md-offset-4 well vertical-center">
        <legend>Please Sign In</legend>
        @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  @foreach ($errors->all() as $error)
                    {{ $error }}
                  @endforeach
            </div>
        @endif
        {!!Form::open(['url' => 'auth/login', 'class' => 'form-signin'])!!}
            {!!Form::text('username', null, ['class' => 'form-control', 'style' => 'margin-bottom: 10px', 'placeholder' => 'Username', 'required', 'autofocus'])!!}
            {!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required'])!!}
            <div class="checkbox">
              <label>
                <input name="remember" type="checkbox"> Remember me
              </label>
            </div>
            <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
            {!!Form::submit('Sign in', ['class' => 'btn btn-info btn-block'])!!}
        {!!Form::close()!!}
    </div>
</div>
@endsection
