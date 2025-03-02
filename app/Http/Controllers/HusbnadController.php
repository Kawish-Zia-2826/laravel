<?php

namespace App\Http\Controllers;

use App\Models\Wife;
use App\Models\Husband;
use App\Models\Scopes\UserScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HusbnadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
$husband =  Husband::all();
return $husband->load('wife');

    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // echo Str::slug('kawish zia','_');
        Husband::create([
            'name'=>'shiekh kawish zia'
        ]);
// Husband::find(1)->delete();
   
        // Wife::where('husband_id',2)->delete();
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
        // Husband::find($id)->get();
    }
}
