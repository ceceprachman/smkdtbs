@extends('admin.default')

@section('main')

    {!!Form::model($user, ['route' => ['admin.update', $user->id], 'method' => 'PATCH'])!!}
        {!!Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username'])!!}
        {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name'])!!}
        {!!Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address'])!!}
        {!!Form::submit('Update User', ['class' => 'btn btn-primary'])!!}
    {!!Form::close()!!}

@stop