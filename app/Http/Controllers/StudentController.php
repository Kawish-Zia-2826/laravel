<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Contact;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Student::has('contact','>=',2)->with('contact')->get();
        // return Student::select('name','age')->withCount('contact')->get();
        // $user  =  Student::find(1);
        //  $user->contact;
        //  return $user;

        $student = Student::get();
        // return $student;
        // foreach ($student->contact as $value) {
        //     echo $value->city . "<br>";
        // }

        foreach ($student as  $value) {
            echo "the user name is " .$value->name . "<br>";
             foreach ($value->contact as $value) {
            echo  "the user city is ". $value->city . "<br>";
        }
        echo "<hr>";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $create  = Student::create([
        //     'name'=>'"kawish zia"',
        //     'age'=>22
            
        // ]);
        // $create->contact()->create([
        //     'phone'=>'32143578',
        //     'city'=>'karachi',
        //     'student_id'=>26
    
        // ]);
        $student  = Student::find(12);
        $student->contact()->sync([12,13]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
