@extends('department.layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('department/' .$department->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="dept_id" id="dept_id" value="{{$department->dept_id}}" id="dept_id" />
        
        <label>DepartmentName</label></br>
        <input type="text" name="dept_name" id="dept_name" value="{{$department->dept_name}}" class="form-control"></br>
        
        
          <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>