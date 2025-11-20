<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $posts = Post::latest()->get(); 
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'=>'required|string|max:255',
            'content'=>'required|string',
        ]);

        //Ajout de l'utilisateur connecté
        $validated['user_id'] = Auth::id() ?? 1;

        //Création
        Post::create($validated);
        return redirect()->route('post.index')->with('success' , 'Post créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('post.edit' , compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title'=>'required|string|max:255',
            'content'=>'required|string',
        ]);

        $post->update($validated);
        return redirect()->route('post.index')->with('success' , 'Le post à bien été mis à jour !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('success' , 'Le post à bien été supprimé');
    }
}
