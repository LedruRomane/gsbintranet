<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use App\Models\Medicament;
use Illuminate\Http\Request;

class MedicamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicaments = Medicament::latest()->with(['famille'])->paginate(5);
        return view('medicaments.index', compact('medicaments'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $familles = Famille::all();
        return View('medicaments.create',['familles'=>$familles]);
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
            'nomCommercial' => 'required',
            'composition' => 'required',
            'effets' => 'required',
            'contreIndications' => 'required',
            'idFamille' => 'required'
        ]);

        Medicament::create($request->all());

        return redirect()->route('medicaments.index')
            ->with('success', 'Médicament créé.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicament  $medicament
     * @return \Illuminate\Http\Response
     */
    public function show(Medicament $medicament)
    {
        $medicament->load('famille');
        return View('medicaments.show', compact('medicament'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicament  $medicament
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicament $medicament)
    {
        $familles = Famille::all();
        return View('medicaments.edit',['familles'=>$familles,'medicament'=> $medicament]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicament  $medicament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicament $medicament)
    {
        $request->validate([
            'nomCommercial' => 'required',
            'composition' => 'required',
            'effets' => 'required',
            'contreIndications' => 'required',
            'idFamille' => 'required'
        ]);
        $medicament->update($request->all());

        return redirect()->route('medicaments.index')
            ->with('success', 'Medicament mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicament  $medicament
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicament $medicament)
    {
        $medicament->delete();

        return redirect()->route('medicaments.index')
            ->with('success', 'Medicament bien supprimé');
    }
}
