<?php

namespace App\Http\Controllers;

use App\Models\Father;
use Illuminate\Http\Request;

class FatherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $father =  Father::with('many_children')->with('many_mother')->find('1');
            return $father;
    //    $users =  Father::with('mother')->with('children')->get();
    //     foreach ($users as  $user) {
    //         echo "the father name is  "  . $user->Father_name . "<br>";
    //         echo "the mother name is ". $user->mother->Mother_name ."<br>";
    //         echo "the children name is ". $user->children->children_name . "<br>";
    //         echo "<hr>";
    //     }
    // return $user;

//     $oldest =  Father::with('latestMother')->find(1);
//     // return $oldest;
//    echo "the husband is " .  $oldest->Father_name . "<br>" . "the latest wife is " . $oldest->latest_mother->Mother_name;

// return $oldest;
//    echo  "oldest wife name is ". $oldest->oldest_mother()->Mother_name; 


return Father::with('mother_name')->with('latestMother')->get();
   
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
