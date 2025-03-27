<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauce;

class ApiController extends Controller
{
    public function index()
    {
        $sauces = Sauce::all();

        return response()->json($sauces);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sauces.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate([
            'userId' => 'required',
            'name' => 'required',
            'manufacturer' => 'required',
            'description' => 'required',
            'mainPepper' => 'required',
            'imageUrl' => 'required',
            'heat' => 'required',
        ]);

        $sauce = new Sauce;
        $sauce->userId = 1;
        $sauce->name = $request->name;
        $sauce->manufacturer = $request->manufacturer;
        $sauce->description = $request->description;
        $sauce->mainPepper = $request->mainPepper;
        $sauce->imageUrl = $request->imageUrl;
        $sauce->heat = $request->heat;
        $sauce->likes = 0;
        $sauce->dislikes = 0;
        $sauce->usersLikes = '';
        $sauce->usersDislikes = '';
        $sauce->save();

        return response()->json($sauce);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $numerosauce)
    {
        $sauce=Sauce::findOrFail($numerosauce);
        return response()->json($sauce);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $numerosauce)

    {
        $sauce=Sauce::findOrFail($numerosauce);
        return response()->json($sauce);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $numerosauce)
    {
        $sauce=Sauce::findOrFail($numerosauce);
        $request->validate([
            'name' => 'required',
            'manufacturer' => 'required',
            'description' => 'required',
            'mainPepper' => 'required',
            'imageUrl' => 'required',
            'heat' => 'required',
        ]);
        $sauce->update($request->all());

        return response()->json($sauce);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $numerosauce)
    {
        $sauce=Sauce::findOrFail($numerosauce);
        $sauce->delete();

        return response()->json($sauce);
    }
}
