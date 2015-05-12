@extends('admin.default')

@section('main')
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
    @include('flash::message')
    <div id="chart" style="width:100%; height:400px;"></div>
@endsection