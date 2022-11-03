<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store (Request $request){
        $store= new Article();
        $store->title = $request->nom;
        $store->img = $request->img;
        $store->text = $request->text;
        $store->save();
        return redirect()-> back();
    }
}
