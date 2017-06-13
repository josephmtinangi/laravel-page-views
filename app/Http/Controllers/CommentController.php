<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Article $article)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'email' => 'required|email',
            'body' => 'required',
        ]);

        $comment = new Comment();
        $comment->name = $request->input('name');
        $comment->email = $request->input('email');
        $comment->website = $request->input('url');
        $comment->body = $request->input('body');

        $article->comments()->save($comment);

        return redirect('articles/' . $article->id);
    }
}
