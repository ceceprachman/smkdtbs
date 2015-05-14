@extends('admin.default')

@section('main')
    <ol class="breadcrumb">
        <li><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="active">User</li>
    </ol>

<legend>Daftar User</legend>
    @include('part.table')
@endsection