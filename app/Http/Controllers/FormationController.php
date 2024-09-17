<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::all();
        return view('dashboard.formations.index', compact('formations'));
    }

    public function create()
    {
        return view('dashboard.formations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'typeformation' => 'required|string|max:255',
            'detail' => 'required',
            'statut' => 'required|in:actif,inactif',
        ]);

        Formation::create($request->all());

        return redirect()->route('formations.index')->with('success', 'Formation created successfully.');
    }

    public function edit(Formation $formation)
    {
        return view('dashboard.formations.edit', compact('formation'));
    }

    public function update(Request $request, Formation $formation)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'typeformation' => 'required|string|max:255',
            'detail' => 'required',
            'statut' => 'required|in:actif,inactif',
        ]);

        $formation->update($request->all());

        return redirect()->route('formations.index')->with('success', 'Formation updated successfully.');
    }

    public function destroy(Formation $formation)
    {
        $formation->delete();

        return redirect()->route('formations.index')->with('success', 'Formation deleted successfully.');
    }
}

