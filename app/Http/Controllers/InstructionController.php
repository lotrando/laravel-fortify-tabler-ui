<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructionController extends Controller
{
    public function akreditacni()
    {
        return view('standardy.akreditacni', ['category' => 'Standardy', 'title' => 'Akreditační']);
    }

    public function osetrovatelske()
    {
        return view('standardy.osetrovatelske', ['category' => 'Standardy', 'title' => 'Ošetřovatelské']);
    }
}
