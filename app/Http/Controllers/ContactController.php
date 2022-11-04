<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store (Request $request){
        $store= new Message();
        $store->nom = $request->nom;
        $store->sujet = $request->sujet;
        $store->email = $request->email;
        $store->message = $request->message;
        $store->save();
        return redirect()-> back();
    }
}
