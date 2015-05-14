@extends('admin.default')

@section('main')
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
    {{$user->profiles->name}}
    @include('flash::message')
    @include('admin.info')
    <div id="chart" style="width:100%; height:400px;"></div>
@endsection