<?php

namespace App\Http\Controllers;

use App\Models\Jame;
use Illuminate\Http\Request;

class JameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Jame::create([
        //     'json'=>[
        //         'name'=>'jame',
        //         'age'=>'20'
        //     ]
        //     ]);
        $jam = Jame::find(1);
        $metaData = $jam->json; // JSON field ko array me convert karega
        
        $metaData['name'] = "jam 2"; // Name update karna
        
        $jam->json = $metaData; // Wapis JSON assign karna
        $jam->save(); // Save to database
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
