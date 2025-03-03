<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $Store = Store::get();

        return view('store',compact('Store'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('photo');
        // return dd($file);
        $request->validate(
            [
                'photo'=>'required|mimes:png,jpg|max:2000'
            ]
            );
        //    return $image_path =  $file->getSize();


                $path = $request->photo->store('images','public');
                Store::create([
                    'file_name'=>$path
                ]);
             return    redirect()->route('store.index')->with('status','user image succesfully');
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
        $data = Store::find($id);
    
        if (!$data) {
            return redirect()->route('store.index')->with('error', 'Record not found');
        }
    
        // File ka path generate karna
        $image_path = public_path('storage/' . $data->file_name);
    
        // File ko delete karna (agar exist karti hai)
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
    
        // **Database se record delete karna**
        $data->delete();
    
        return redirect()->route('store.index')->with('status', 'User image deleted successfully');
    }
    
}
