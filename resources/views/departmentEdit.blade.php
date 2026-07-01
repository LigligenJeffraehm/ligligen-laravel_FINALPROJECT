@extends('MasterLayout')
@section('title', 'Department Update')


@section('content')
<div class="container">
    <form action="{{route('departments.update', $department->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label >Name Update</label>
            <input type="text" name = "departmentName" value = "{{$department->departmentName}}">
        </div>
        <div class="form-group">
            <label >Description Update</label>
            <input type="text" name = "departmentDescription" value = "{{$department->departmentDescription}}">
        </div>
        <button type = "submit">Submit</button>
    </form>
</div>

@endsection