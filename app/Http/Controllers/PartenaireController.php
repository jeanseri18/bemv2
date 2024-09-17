<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    public function index()
    {
        $partenaires = Partenaire::all();
        return view('dashboard.partenaires.index', compact('partenaires'));
    }

    public function create()
    {
        return view('dashboard.partenaires.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('public/images');
        }
        $data['statut']='active';

        Partenaire::create($data);
        return redirect()->route('partenaires.index')->with('success', 'Partenaire created successfully.');
    }

    public function edit(Partenaire $partenaire)
    {
        return view('dashbord.partenaires.edit', compact('partenaire'));
    }

    public function update(Request $request, Partenaire $partenaire)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            if ($partenaire->image) {
                Storage::delete($partenaire->image);
            }
            $data['image'] = $request->file('image')->store('public/images');
        }

        $partenaire->update($data);
        return redirect()->route('partenaires.index')->with('success', 'Partenaire updated successfully.');
    }

    public function destroy(Partenaire $partenaire)
    {
        if ($partenaire->image) {
            Storage::delete($partenaire->image);
        }
        $partenaire->delete();
        return redirect()->route('partenaires.index')->with('success', 'Partenaire deleted successfully.');
    }
}
