<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\department;
use DB;

class studentcontroller extends Controller
{
    public function index()
    {
        $department = Department::all();
         $students = Student::all();
        
        return view('students.index',compact(['students']));

       
    }
    
    public function create()
    { $students = Student::all();
        // $department = Department::all();
        $department = DB::table('department')->get();
        return view('students.create',compact(('department')));
    }
 
    public function store(Request $request)
    {
        $data = $request->all();
        Student::create($data);
        DB::table('students')->insert([
            
            'name' => $data['name'],
            'address' => $data['address'],
            'mobile' => $data['mobile'],
            'dept_name' => $data['dept_name']
        ]);
        
        
        return redirect('student')->with('flash_message', 'Student Addedd!');  
        
        
    }
    
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }
    
    public function edit($id)
    {
        $student = Student::find($id);
        $department = Department::all();
        return view('students.edit',compact(('department')))->with('students', $student);
    }
  
    
    public function update(Request $request, $id)
    {
        $department = Department::all();
        $student = Student::find($id);
        // $item = Item::find($id);
        $input = $request->all();
        $student->update($input);

       
        




        // $student->dept_id = $request->dept_id;
    // $item->column_with_dropdown = $request->column_with_dropdown;
    // $student->save();

    // return redirect()->route('student.index');



        return redirect('student')->with('flash_message', 'student Updated!');  
    }
  
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');  
    }
}

