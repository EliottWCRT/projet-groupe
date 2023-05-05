<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'image' => 'image|max:2048',
    ]);


    $article = new Article();
    $article->title = $request->input('title');
    $article->content = $request->input('content');

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . '_' . $image->getClientOriginalName();
        $path = $image->storeAs('public/images', $filename);
        $article->image = $filename;
    }

    $article->save();

    return redirect()->route('articles.index')->with('success', 'L\'article a été créé avec succès.');
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    $article->title = $request->title;
    $article->content = $request->content;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = 'images/' . $filename;
        Image::make($image->getRealPath())->resize(600, 400)->save(public_path($path));
        Storage::delete($article->image); // delete the old image file from storage
        $article->image = $path;
    }

    $article->save();

    return redirect()->route('articles.index')->with('success', 'Article modifié avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
    Storage::delete($article->image); // delete the image file from storage
    $article->delete();

    return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès.');
    }
}
