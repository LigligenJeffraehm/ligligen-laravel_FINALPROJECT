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
                <td><form action="{{route('roles.destroy', $role->id)}}" method = "post">
                    @csrf
                    @method('DELETE')
                    
                    <a href="{{route('roles.edit', $role->id)}}">Edit</a>

                    <button type = "submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
