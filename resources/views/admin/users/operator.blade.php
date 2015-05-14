@extends('admin.default')

@section('main')
    <ol class="breadcrumb">
        <li><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="active">Operators</li>
    </ol>

    <legend>Daftar Operator</legend>
    @include('part.table')
@endsection