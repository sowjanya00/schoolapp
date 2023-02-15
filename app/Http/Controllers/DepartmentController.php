<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Department;
class DepartmentController extends Controller
{
    public function index()
    {
        $department = Department::all();
        return view ('department.index')->with('department', $department);
    }
    
    public function create()
    {
        return view('department.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Department::create($input);
        return redirect('Department')->with('flash_message', 'department Addedd!');
        

        
    }
    
    public function show($dept_id)
    {
        $department = Department::find($dept_id);
        return view('department.show')->with('department', $department);
    }
    
    public function edit($dept_id)
    {
        $department =  Department::find($dept_id);
        return view('department.edit')->with('department', $department);
    }
    
    public function update(Request $request, $dept_id)
    {
        $department =  Department::find($dept_id);
        $input = $request->all();
        $department->update($input);
        return redirect('department')->with('flash_message', 'department Updated!');  
    }
  
    public function destroy($idept_id)
    {
        Department::destroy($dept_id);
        return redirect('department')->with('flash_message', 'department deleted!');  
    }
}