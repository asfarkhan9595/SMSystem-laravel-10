<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $teachers = Teachers::all();
            return view('teacher.index', compact('teachers'));
        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred: ' . $e->getMessage());
            return redirect()->route('teacher.index');
        }
    }
    
       
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        try{
            $validatedata = $request->validated();
            $teachers = Teachers::create($validatedata);
            return redirect('teachers')->with('success', 'Teacher Added successfully!');

        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred: ' . $e->getMessage());
            return redirect()->route('teacher.index');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Teachers::findOrfail($id);
        return view('teacher.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd($id); 
        $teachers = Teachers::find($id);
        return view('teacher.edit', compact('teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherRequest $request, string $id)
    { 

        try {
            $teachers = Teachers::find($id);
    
            if (!$teachers) {
                return redirect()->route('teachers')->with('error', 'Teacher not found.');
            }
    
            $validatedData = $request->validated();
            $teachers->update($validatedData);
    
            return redirect('teachers')->with('success', 'Teacher Details Updated!');
        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred: ' . $e->getMessage());
            return redirect()->route('teachers');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $teachers = Teachers::find($id);
            $teachers->delete();
            return redirect('teachers')->with('success','Teacher Data Deleted!');
        } catch(\Exception $e){

              session()->flash('error', 'An error occurred: ' . $e->getMessage());
            return redirect()->route('teachers');
        }
    
    }
}
