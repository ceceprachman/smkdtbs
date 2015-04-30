@extends('app')

@section('content')
@include('part.style')

<div class="container-fluid main-container">
    @include('admin.nav-side')
    <div class="col-sm-10 col-xs-12">
        @yield('main')
    </div>
</div>

@endsection