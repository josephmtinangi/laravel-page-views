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

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function photos()
    {
        return view('pages.photos');
    }

    public function archives()
    {
        return view('pages.archives');
    }
}
