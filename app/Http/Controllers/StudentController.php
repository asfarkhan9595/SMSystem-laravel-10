<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        try {
            $validateStudent = $request->validated();
         
            $student =  Student::create( $validateStudent);
            return redirect('students')->with('success', 'Student Added Successfully ! ');
        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred: ' . $e->getMessage());

           
            return redirect()->route('student.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Student::findOrfail($id);
        return view('student.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('student.edit')->with('student', $student);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, string $id)
    {
        try {
            $student = Student::find($id);
    
            if (!$student) {
                return redirect()->route('students')->with('error', 'Student not found.');
            }
    
            $validatedData = $request->validated();
            $student->update($validatedData);
    
            return redirect('students')->with('success', 'Student Updated!');
        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred: ' . $e->getMessage());
            return redirect()->route('students');
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    { 
        try{
            $student = Student::find($id);
            $student->delete();
            return redirect('students')->with('success', 'Student deleted!');

        } catch(\Exception $e){
            session()->flash('error', 'An error occurred: ' . $e->getMessage());

           
            return redirect()->route('students');
        }
      
    }
}
