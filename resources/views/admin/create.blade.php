@extends('admin.default')

@section('main')
    {!!Form::open(['route' => 'admin.store'])!!}
        <div class="form-group {{$errors->has('role') ? 'has-error' : ''}}">
            {!!Form::select('role', ['Select Role',
                                     'Administrator',
                                     'Operator',
                                     'Kepala Sekolah',
                                     'Guru',
                                     'Peserta Didik'], null, ['class' => 'form-control'])!!}
            {!!$errors->first('role', '<span class="help-block">:message</span>')!!}
        </div>
        <div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">
            {!!Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username'])!!}
            {!!$errors->first('username', '<span class="help-block">:message</span>')!!}
        </div>
        <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
            {!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password'])!!}
            {!!$errors->first('password', '<span class="help-block">:message</span>')!!}
        </div>
        <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
            {!!Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password Confirmation'])!!}
            {!!$errors->first('password', '<span class="help-block">:message</span>')!!}
        </div>
        <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
            {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name'])!!}
            {!!$errors->first('name', '<span class="help-block">:message</span>')!!}
        </div>
        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
            {!!Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address'])!!}
            {!!$errors->first('email', '<span class="help-block">:message</span>')!!}
        </div>
        {!!Form::submit('Add User', ['class' => 'btn btn-primary'])!!}
    {!!Form::close()!!}
@endsection