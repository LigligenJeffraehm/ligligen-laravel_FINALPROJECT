@extends('MasterLayout')

@section('title'. 'New Role')

@section('content')
<form action="{{route('roles.store')}}" method = "POST">
    <div class="form-group">
        <label>Role:</label>
        <input type="text" name = "roleName">
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" name="roleDescription" >
    </div>

<button type = "submit">Submit</button>
</form>
@endsection