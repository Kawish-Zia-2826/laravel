<?php

namespace App\Http\Controllers;

use App\Models\Wife;
use Illuminate\Http\Request;

class WifeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Wife::find(4)->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Wife::create([
        //     'husband_id'=>4,
        //     'wife_name'=>'jawerya'
        // ]);
       
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
