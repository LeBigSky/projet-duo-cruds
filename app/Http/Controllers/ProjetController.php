<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function store (Request $request){
        $store= new Projet();
        $store->title = $request->title;
        $store->img = $request->img;
        $store->text = $request->text;
        $store->save();
        return redirect()-> route('projet');
    }
    public function delete ($item){
        $projet= Projet::find($item);
        $projet->delete();
        return redirect()-> route ('projet');
    }
    public function show ($id){
        $projet= Projet::find($id);
        return view('Back.pages.adminshowfolio', compact('projet'));
    }

}
