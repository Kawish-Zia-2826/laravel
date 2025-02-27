<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Contact::with('student')->where('id',1)->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $create  = Contact::create([
            'phone'=>'32143578',
            'city'=>'karachi',
            'student_id'=>26
            
            
        ]);
        $create->student()->create([
            
    'name'=>'"kawish zia"',
            'age'=>22
        ]);
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
