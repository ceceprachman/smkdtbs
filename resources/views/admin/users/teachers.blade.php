@extends('admin.default')

@section('main')
    @foreach($teachers as $teacher)
        {{$teacher->name}}
        {!!link_to_route('admin.edit', 'Edit '.$teacher->name, ['id' => $teacher->id])!!}
    @endforeach
@endsection