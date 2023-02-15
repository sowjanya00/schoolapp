@extends('department.layout')
@section('content')

<div class="card">
  <div class="card-header">Departments Page</div>
  <div class="card-body">
      
      <form action="{{ url('department') }}" method="post">
        {!! csrf_field() !!}
        <label>DepartmentName</label></br>
        <input type="text" name="dept_name" id="dept_name" class="form-control"></br>
        

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>