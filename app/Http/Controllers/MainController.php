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
        $articles= Article::take(4)->get();
        return view('pages.blog', compact('articles'));
    }
    public function portfolio (){
        $projets= Projet::take(15)->get();
        return view('pages.portfolio', compact('projets'));
    }

    /* FUNCTION BACK-END*/
    public function admin (){
        
        return view('Back.adminhome');
    }
    public function blogcreate (){
        
        return view('Back.pages.blogcreate');
    }
    public function backblog (){
        $articles= Article::take(4)->get();
        return view('Back.pages.adminblog', compact('articles'));
    }
    public function projet (){
        $projets= Projet::take(15)->get();
        return view('Back.pages.adminportfolio', compact('projets'));
    }
    public function backprojet (){
        $projets= Projet::take(15)->get();
        return view('Back.pages.projetcreate', compact('projets'));
    }

}
