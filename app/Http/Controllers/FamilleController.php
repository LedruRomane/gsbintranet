<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use Illuminate\Http\Request;

class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familles = Famille::latest()->paginate(5);

        return view('medicaments.index', compact('familles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicaments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'reference' => 'required',
            'libelle' => 'required'
        ]);

        Famille::create($request->all());

        return redirect()->route('medicaments.index')
            ->with('success', 'Famille created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Famille  $famille
     * @return \Illuminate\Http\Response
     */
    public function show(Famille $famille)
    {
        return view('medicaments.show', compact('famille'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Famille  $famille
     * @return \Illuminate\Http\Response
     */
    public function edit(Famille $famille)
    {
        return view('medicaments.edit', compact('famille'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Famille  $famille
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Famille $famille)
    {
        $request->validate([
            'reference' => 'required',
            'libelle' => 'required'
        ]);
        $famille->update($request->all());

        return redirect()->route('medicaments.index')
            ->with('success', 'Famille updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Famille  $famille
     * @return \Illuminate\Http\Response
     */
    public function destroy(Famille $famille)
    {
        $famille->delete();

        return redirect()->route('medicaments.index')
            ->with('success', 'Famille deleted successfully');
    }
    /**
     * Show tabulation with medicaments from a spectific famille
     * @return \Illuminate\Http\Response
     */
    public function medicaments(Famille $famille)
    {
        $famille->load('medicaments');
        $familles = Famille::all();

        return view('medicaments.medicaments', [
            'famille' => $famille,
            'familles' => $familles,
            'user' => auth()->user()
        ]);
    }
}
