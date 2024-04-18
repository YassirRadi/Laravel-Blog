<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::paginate(5);
        return view('index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validating the incoming data
        $validatedData = $request->validate([
            'title' => ['required'],
            'content' => ['required'],
            'image_url' => ['required'],
            'category' => ['required'],
            'tags' => ['required'],
        ]);

        // uploading the image to public/pictures
        $validatedData['image_url'] = $request->file('image_url')->store('pictures', 'public');

        // get the authenticated user ID
        $validatedData['user_id'] = Auth::id();

        // storing the record in the database
        $article = Article::create($validatedData);

        // ....
        $article->categories()->attach($validatedData['category']);

        $tagIds = [];
        $tags = collect(explode(',', $validatedData['tags']))->map(function ($tag) {
            return trim($tag);
        });

        foreach ($tags as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $tagIds[] = $tag->id;
        }

        $article->tags()->attach($tagIds);

        return redirect()->route("home")->with(['success' => 'Article published successfully']);
    }

    /**
     * Display the specified resource.
     */

    public function show(Article $id)
    {
        return view('details', ['article' => $id]);
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
