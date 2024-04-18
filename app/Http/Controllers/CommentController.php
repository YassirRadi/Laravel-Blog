<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{

    public function addComment(Article $article, Request $request)
    {

        $validatedData = $request->validate([
            'comment' => 'required',
        ]);

        $newComment = new Comment();

        $newComment->comment = $validatedData['comment'];
        $newComment->user()->associate(auth()->user());
        $newComment->article_id = $article->id;

        $newComment->save();

        return redirect()->route("home", ['article' => $article])->with("success", "Comment added");
    }


    public function add()
    {
    }

    public function destroy()
    {
    }
}
