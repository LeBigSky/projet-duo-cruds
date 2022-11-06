<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store (Request $request){
        $store= new Article();
        $store->title = $request->title;
        $store->img = $request->img;
        $store->text = $request->text;
        $store->save();
        return redirect()-> route('backblog');
    }
    public function delete($item){
        $article= Article::find($item);
        dd($article);
    //    $article->delete();
        return redirect()-> route ('backblog');
    }
}
