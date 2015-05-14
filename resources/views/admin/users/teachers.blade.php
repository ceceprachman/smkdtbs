@extends('admin.default')

@section('main')
    <ol class="breadcrumb">
        <li><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="active">Teachers</li>
    </ol>

    <legend>Daftar Teachers</legend>
    @include('part.table')
@endsection