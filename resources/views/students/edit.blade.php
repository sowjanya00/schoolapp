@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

  <!-- <form action="{{ route('student.store') }}" method="post"> -->
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"></br>
        
        <div class="form-group mb-3">
        <label for="dept_name">Dept_name</label>

        <select name="dept_name" id="dept_id" class="form-control">
                        
                             <option value="dept_id">-- Select department name--</option> 
                             
                             {{$department}} 
                             @foreach ($department as $data) 
                             <option value="{{$data->dept_name}}">{{ $data->dept_name }}</option> 
                             
                             @endforeach 
                              
                        </select>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>