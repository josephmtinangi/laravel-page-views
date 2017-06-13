<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
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
        $authors = User::latest()->get();
        return view('pages.about', compact('authors'));
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
