@extends('admin.default')

@section('main')
    @include('flash::message')
    Welcome
    <div id="chart" style="width:100%; height:400px;"></div>
@endsection