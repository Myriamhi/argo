<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Argonaute;

class NavController extends Controller
{

    public function list()
    {
        $argonautes = Argonaute::all();
        return view('list', ['argonautes' => $argonautes]);
    }

    public function addArgonaute()
    {
        $argonautes = Argonaute::all();
        return view('list', ['argonautes' => $argonautes]);
    }
}
