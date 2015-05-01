@extends('admin.default')

@section('main')
    @include('flash::message')
    Welcome
    <div id="chart" style="width:100%; height:400px;"></div>
    <div id="pie" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
@endsection