<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $query = request('q');
        $articles = Article::searchByKeyword($query)->get();
        return view('articles.index', compact('articles'));
    }
}
