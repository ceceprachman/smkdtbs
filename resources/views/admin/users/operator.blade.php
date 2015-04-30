@extends('admin.default')

@section('main')
    @foreach($operators as $operator)
        {{$operator->name}}
        {!!link_to_route('admin.edit', 'Edit '.$operator->name, ['id' => $operator->id])!!}
    @endforeach

@endsection