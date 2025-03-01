<?php

namespace App\Http\Controllers;

use App\Models\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JsonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return Json::whereJsonLength('meta_data->name',1)->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Json::where('id',2)->update([
        //   'meta_data->address->city'=>"city of light"
        // ]);

        $json = Json::find(2);
        // $json->meta_data['name'] = "jawad zia";
        
        $json->meta_data = collect($json->meta_data)->forget('class');
        $json->save();
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
