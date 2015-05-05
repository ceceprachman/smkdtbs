@extends('admin.default')

@section('main')
    {{$user->name}}
    {{$user->password}}


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Delete</button>

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="mySmallModalLabel">Warning !!<a class="anchorjs-link" href="#mySmallModalLabel"><span class="anchorjs-icon"></span></a></h4>
            </div>
            <div class="modal-body">
                Delete {{$user->name}} ??

            </div>
            <div class="modal-footer">
                {!!Form::open(['method' => 'DELETE', 'route' => ['admin.destroy', $user->username]])!!}
                {!!Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
                {!!Form::close()!!}
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>

    {!!link_to_route('admin.edit', 'Edit '.$user->name, ['username' => $user->username])!!}



@stop