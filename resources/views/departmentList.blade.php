@extends('MasterLayout')
@section('title', 'Departments')
@section('content')
<div class="container">
    <a href="{{route('departments.create')}}">New Office/Department</a>
    @csrf
    <table>
        <thead>
            <th>Office</th>
            <th>Description</th>
        </thead>
        <tbody>
            @foreach($departments as $department)
            <tr>
                <td>{{$department->departmentName}}</td>
                <td>{{$department->departmentDescription}}</td>
                <td><form action="{{route('departments.destroy', $department->id)}}" method = "POST">
                @csrf    
                
                <a href="{{route('departments.edit', $department->id)}}">Edit</a>
                @method('DELETE')
                @csrf
                <button type = "submit">Delete</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection