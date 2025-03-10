<?php

namespace App\Http\Controllers;

use App\Models\Mother;
use Illuminate\Http\Request;

class MotherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $mother = Mother::with('children')->with('husband')->find(2);
     return $mother;   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Mother::create([
                'Mother_name'=>'fatima 2',
                'Husband'=>10 
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
