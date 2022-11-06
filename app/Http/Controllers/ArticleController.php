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
        $articles= Article::find($item);
        // dd($item);
       $articles= $articles->delete();
        return redirect()-> route ('backblog');
    }
}
