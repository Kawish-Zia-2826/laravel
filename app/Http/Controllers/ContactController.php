<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Student;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Contact::withCount('student')->get();
        // $contact = Contact::withCount('student')->get();
        // $contact = Contact::with('student')->find(1);
        // return  Contact::with('student')->where('city','LIKE','g%')->withHas('student',function($q){
        //     $q->where('age','>',20);
        // })->get();

        // $student = Student::where('name','Lawrence Yost')->get();
        // $contact = Contact::whereBelongsTo($student)->get();
        // return $contact;
        // return $contact;
        // $contact->student;
        // return $contact;
        $contact = Contact::find(10);
        return $contact->student  ;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $student = Student::find(2);
       $student->contact()->create(
        [
                'phone'=>'12345',
                'city'=>'karachi'
        ]
        );
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
