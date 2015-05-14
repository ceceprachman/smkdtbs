@extends('admin.default')

@section('main')
    <ol class="breadcrumb">
        <li><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="active">Students</li>
    </ol>

    <legend>Daftar Students</legend>
    @include('part.table')
@endsection