<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauce;

class SauceController extends Controller
{
    public function index()
    {
        $sauces = Sauce::all();

        return view('sauces.index',compact('sauces'));
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

        Sauce::create([
            'userId' => 1,
            'name' => $request->name,
            'manufacturer'=> $request->manufacturer,
            'description'=> $request->description,
            'mainPepper'=> $request->mainPepper,
            'imageUrl'=> $request->imageUrl,
            'heat'=> $request->heat,
            'likes'=> 0,
            'dislikes'=> 0,
            'usersLikes' => '',
            'usersDislikes' => '',
        ]);

        return redirect()->route('listerSauces')
                        ->with('success','Sauce créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $numerosauce)
    {
        $sauce=Sauce::findOrFail($numerosauce);
        return view('sauces.show',compact('sauce'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $numerosauce)

    {
        $sauce=Sauce::findOrFail($numerosauce);
        return view('sauces.edit',compact('sauce'));
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

        return redirect()->route('listerSauces')
                        ->with('success','Sauce mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $numerosauce)
    {
        $sauce=Sauce::findOrFail($numerosauce);
        $sauce->delete();

        return redirect()->route('listerSauces')
                        ->with('success','Sauce supprimé avec succès');
    }
}
