@extends('admin.default')

@section('main')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{route('admin.index')}}">Dashboard</a></li>
            <li><a href="{{route('admin.all')}}">User</a></li>
            <li class="active">Create</li>
        </ol>
        <legend>Registration</legend>
        <div class="row">
            <div class="col-lg-6">
                {!!Form::open(['route' => 'admin.store'])!!}
                    <div class="form-group {{$errors->has('role') ? 'has-error' : ''}}">
                        <label>Role</label>
                        <div class="input-group"> <span class="input-group-addon"><span class="fa fa-bars"></span> </span>
                            {!!Form::select('role', ['Select Role',
                                                     'Administrator',
                                                     'Operator',
                                                     'Kepala Sekolah',
                                                     'Guru',
                                                     'Peserta Didik'], null, ['class' => 'form-control'])!!}
                            {!!$errors->first('role', '<span class="help-block">:message</span>')!!}
                        </div>
                    </div>
                    <div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">
                        <label>Username</label>
                        <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
                            {!!Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username'])!!}
                            {!!$errors->first('username', '<span class="help-block">:message</span>')!!}
                        </div>
                    </div>
                    <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                        <label>Password</label>
                        <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            {!!Form::password('password', [ 'id' => 'password',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'Password',
                                                            'data-toggle' => 'popover',
                                                            'title'       => 'Password Strength',
                                                            'data-content' =>'Enter Password...'])!!}
                            {!!$errors->first('password', '<span class="help-block">:message</span>')!!}
                        </div>
                    </div>
                    <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                        <label>Confirm Password</label>
                        <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-resize-vertical"></span></span>
                            {!!Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password Confirmation'])!!}
                            {!!$errors->first('password', '<span class="help-block">:message</span>')!!}
                        </div>
                    </div>
                    <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                        <label>Name</label>
                        <div class="input-group"> <span class="input-group-addon"><span class="fa fa-font"></span> </span>
                            {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name'])!!}
                            {!!$errors->first('name', '<span class="help-block">:message</span>')!!}
                        </div>
                    </div>
                    <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                        <label>Email</label>
                        <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                            {!!Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address'])!!}
                            {!!$errors->first('email', '<span class="help-block">:message</span>')!!}
                        </div>
                    </div>
                    {!!Form::submit('Add User', ['class' => 'btn btn-primary pull-right'])!!}
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@endsection