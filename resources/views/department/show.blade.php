@extends('department.layout')
@section('content')
<div class="card">
  <div class="card-header">Department Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">dept_id : {{ $department->dept_id }}</h5>
        
        <p class="card-text">dept_name : {{ $department->dept_name }}</p>
  </div>
  </div>
      
    </hr>
  
  </div>
</div>