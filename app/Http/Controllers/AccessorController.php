<?php

namespace App\Http\Controllers;

use App\Models\Accessor;
use Illuminate\Http\Request;

class AccessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accessor = Accessor::get();
        return $accessor;     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Accessor::create([
          'user_name'=>'aDSFwish',
          'email'=>'kawishASD@gmail.com',
          'salary'=>3213,
          'dob'=>now(),
          'password'=>123456  
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
