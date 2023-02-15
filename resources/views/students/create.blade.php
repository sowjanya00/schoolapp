@extends('students.layout')
@section('content')

<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ route('student.store') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <div class="form-group mb-3">
        <label for="dept_name">Dept_name</label>

        <select name="dept_name" id="dept_id" class="form-control">
                        
                             <option value="dept_id">-- Select department name--</option> 
                             
                             {{$department}} 
                             @foreach ($department as $data) 
                             <option value="{{$data->dept_name}}">{{ $data->dept_name }}</option> 
                             
                             @endforeach 
                              
                        </select>
                    </div>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>



<script>
    $(document).ready(function() {
        $('select[name="dept_name"]').change(function() {
            var id = $(this).val();
            $.ajax({
                type: 'GET',
                url: '/dept_id/' + id,
                success: function(data) {
                    $('input[name="dept_id"]').val(data);
                }
            });
        });
    });
</script>
        <!-- $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            /*$('#department-dropdown').on('change', function () {
                var iddepartment = this.value;
                $("#department-dropdown").html('');
                $.ajax({
                    url: "{{url('api/fetch-department')}}",
                    type: "POST",
                    data: {
                        departent_id: iddepartment,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#department-dropdown').html('<option value="">-- Select department --</option>');
                        $.each(<result class="department"></result>, function (key, value) {
                            $("#department-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#city-dropdown').html('<option value="">-- Select department --</option>');
                    }
                });
            });*/
   -->
