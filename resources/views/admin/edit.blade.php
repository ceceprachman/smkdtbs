@extends('admin.default')

@section('main')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li><a href="{{route('admin.all')}}">User</a></li>
        <li class="active">Update</li>
    </ol>
    <legend>Update User</legend>
    {!!Form::model($user, ['route' => ['admin.update', $user->username], 'method' => 'PATCH'])!!}
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group {{$errors->has('role') ? 'has-error' : ''}}">
                <label>Role</label>
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-bars"></span> </span>
                    {!!Form::select('role', ['Select Role',
                    'Administrator',
                    'Operator',
                    'Kepala Sekolah',
                    'Guru',
                    'Peserta Didik'], null, ['class' => 'form-control'])!!}
                </div>
                {!!$errors->first('role', '<span class="help-block">:message</span>')!!}
            </div>
            <div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">
                <label>Username</label>
                <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
                    {!!Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username'])!!}
                </div>
                {!!$errors->first('username', '<span class="help-block">:message</span>')!!}
            </div>
            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                <label>Name</label>
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-font"></span> </span>
                    {!!Form::text('name', $user->profiles->name, ['class' => 'form-control', 'placeholder' => 'Name'])!!}
                </div>
                {!!$errors->first('name', '<span class="help-block">:message</span>')!!}
            </div>
            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                <label>Email</label>
                <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                    {!!Form::text('email', $user->profiles->email, ['class' => 'form-control', 'placeholder' => 'Email Address'])!!}
                </div>
                {!!$errors->first('email', '<span class="help-block">:message</span>')!!}
            </div>
            {!!Form::submit('Update User', ['class' => 'btn btn-primary pull-right'])!!}
        </div>
    </div>
    {!!Form::close()!!}
</div>
@stop