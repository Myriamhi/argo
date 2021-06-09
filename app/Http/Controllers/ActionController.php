<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Argonaute;


class ActionController extends Controller
{
    public function addArgonaute(Request $request) {
        $argonaute = new Argonaute;
        $argonaute->nom = $request->nom;
        $argonaute->save();
        return redirect('/');
    }
}
