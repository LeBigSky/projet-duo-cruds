<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Projet;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home (){
        return view('home');
    }
    public function contact (){
        return view('pages.contact');
    }
    public function blog (){
        $articles= Article::all();
        return view('pages.blog', compact('articles'));
    }
    public function portfolio (){
        $projets= Projet::all();
        return view('pages.portfolio', compact('projets'));
    }
}
