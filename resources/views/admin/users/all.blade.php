@extends('admin.default')

@section('main')
    <ol class="breadcrumb">
        <li><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="active">User</li>
    </ol>

<legend>Daftar User</legend>
    @include('flash::message')
    <a href="#">Total Users <span class="badge" style="margin-bottom: 10px">{{$users->total()}}</span></a>
    <a href="#">Operators <span class="badge" style="margin-bottom: 10px">{{$operators->total()}}</span></a>
    <a href="#">Teachers <span class="badge" style="margin-bottom: 10px">{{$teachers->total()}}</span></a>
    <a href="#">Students <span class="badge" style="margin-bottom: 10px">{{$students->total()}}</span></a>
    <table id="table" class="table table-striped table-bordered table-condensed">
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Username</th>
          <th>Role</th>
          <th>Email</th>
          <th>Created at</th>
          <th>Last Updated</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      @for($i = 0; $i < count($users); $i++)
        <tr>
          <td>{{$i+1}}</td>
          <td>{!!link_to_route('admin.show', $users[$i]->name, ['username' => $users[$i]->username], ['class' => 'text-capitalize'])!!}</td>
          <td>{{$users[$i]->username}}</td>
          <td>
          {{--{{$users[$i]->role}}--}}
            @if($users[$i]->role == 1)
                Administrator
            @elseif($users[$i]->role == 2)
                Operator
            @elseif($users[$i]->role == 3)
                Kepala Sekolah
            @elseif($users[$i]->role == 4)
                Guru
            @elseif($users[$i]->role == 5)
                Peserta Didik
            @endif
          </td>
          <td>{{$users[$i]->email}}</td>
          <td>{{$users[$i]->created_at}}</td>
          <td>{{$users[$i]->updated_at->diffForHumans()}}</td>
          <td>
            <div class="btn-group">
                <a class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('admin.edit', ['id' => $users[$i]->username])}}"><i class="glyphicon glyphicon-pencil"></i> Edit</a></li>
                    <li>
                        <a href="{{route('admin.destroy', ['id' => $users[$i]->username])}}"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                    </li>
                    <li><a href="{{route('admin.show', ['id' => $users[$i]->username])}}"><i class="glyphicon glyphicon-search"></i> Details</a></li>
                </ul>
            </div>
          </td>
        </tr>
        @endfor
      </tbody>
    </table>
    {!!$users->render()!!} <br>
     <button onclick="window.location.href='{{route('admin.create')}}'" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add User</button>
@endsection