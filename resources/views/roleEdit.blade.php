@extends('MasterLayout')

@section('title', 'Role Edit')

@section('content')
<div class="container">
<form action="{{route('roles.update', $role->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label >Role Name</label>
    <input type="text" name = "roleName" value = "{{$role->roleName}}">
    </div>
    <div class="form-group">
        <label >Description</label>
        <input type="text" name = "roleDescription" value = "{{$role->roleDescription}}">
    </div>
    <button type = "submit">Submit</button>
</form>
    
</div>
@endsection