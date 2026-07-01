@extends('MasterLayout')

@section('title','New Department')


@section('content')
<div class="conatiner">
    <form action="{{route('departments.store')}}" method = "POST">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name = "departmentName">
        </div>
        <div class="form-group">
            <label for="">Description/Functionality</label>
            <input type="text" name = "departmentDescription">
        </div>

        <button type = "submit">Submit</button>
    </form>
</div>

@endsection