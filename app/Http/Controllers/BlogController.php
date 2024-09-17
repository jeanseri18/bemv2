<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('dashboard.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('dashboard.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'detail' => 'required',
            'type' => 'required',
            'date' => 'nullable|date',
            'heure' => 'nullable|date_format:H:i',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('image');
        $data['statut']='active';
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('public/images');
        }
        Blog::create($data);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    public function edit(Blog $blog)
    {
        return view('dashboard.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'detail' => 'required',
            'statut' => 'required|in:active,inactive',
            'date' => 'nullable|date',
            'heure' => 'nullable|date_format:H:i',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::delete($blog->image);
            }
            $data['image'] = $request->file('image')->store('public/images');
        }

        $blog->update($data);
        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::delete($blog->image);
        }
        $blog->delete();
                return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
