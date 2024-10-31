<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $suraj = student::all();



        //  return $new;
        return view('students.home',compact('suraj')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.addnew');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|numeric',
            'email' => 'required|email',
            'pass' => 'required|string|min:2',
        ]);
        error_log('>>>hello');
        $suraj = student::create([
            
               'name'=>$request->name,
               'number'=>$request->number,
               'email'=>$request->email,
               'pass'=>$request->pass,

        ]);
            return redirect()->route('users.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $student)
    {
        $suraj = student::find($student);


        // return $suraj;
        return view('students.singleuser',compact('suraj'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $student)
    {
        $suraj = student::find($student);

        return view('students.update',compact('suraj'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $student)
    {
        $suraj = student::find($student);
            
            $suraj-> name = $request->name;
            $suraj-> number= $request->number;
            $suraj-> email= $request->email;
            $suraj-> pass= $request->pass;

            $suraj->save();

     
     if ($suraj){
         return redirect()->route('users.index');
     }
    }

    
    public function destroy(string $student)
    {
    
          student::destroy($student);         
                  return redirect()->route('users.index');
                
    }
}
