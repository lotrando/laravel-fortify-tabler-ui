<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function akord()
    {
        return view('akord', [
            'category' => 'Oznámení',
            'title' => 'Akord',
            'active' => true
        ]);
    }
}
