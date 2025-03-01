<?php

namespace App\Http\Controllers;

use App\Models\Instagram;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    echo "insta";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $insta = Instagram::create([
            'insa_post'=>'this is insta first post'    
        ]);

        $insta->insta()->create([
                'tags'=>"like"
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
