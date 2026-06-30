@extends('MasterLayout')
@section('title', 'Roles')

@section('content')
<div class="container">
    <h2>Roles</h2>
    <a href="{{route('roles.create')}}">New Role</a>
    <table>
        <thead>
            <th>Role</th>
            <th>Description</th>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                
                <td>{{$role->roleName}}</td>
                <td>{{$role->roleDescription}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
