<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function mostRead()
    {
        $articles = Article::orderBy('view_count', 'desc')->paginate(20);
        return view('articles.index', compact('articles'));
    }
}
