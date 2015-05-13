<button class="btn btn-primary" type="button" style="margin-bottom: 10px">
    <span class="fa fa-users"> Total User <span class="badge">{{$users->total()}}</span>
</button>

<button class="btn btn-success" type="button" style="margin-bottom: 10px">
    <span class="fa fa-desktop"></span> Operator <span class="badge">{{$operators->total()}}</span>
</button>

<button class="btn btn-info" type="button" style="margin-bottom: 10px">
    <span class="fa fa-briefcase"></span> Teacher <span class="badge">{{$teachers->total()}}</span>
</button>

<button class="btn btn-danger" type="button" style="margin-bottom: 10px">
    <span class="fa fa-graduation-cap"></span> Student <span class="badge">{{$students->total()}}</span>
</button>