<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function akord()
    {
        return view('akord', ['favicon' => 'akord.png', 'category' => 'Oznámení', 'title' => 'Akord']);
    }

    public function kultura()
    {
        return view('kultura', ['favicon' => 'kultura.png', 'category' => 'Oznámení', 'title' => 'Kultura']);
    }

    public function obedy()
    {
        return redirect()->away('http://akordapp/SISAkord/Login.aspx?ReturnUrl=%2fSISAkord%2f');
    }

    public function kantyna()
    {
        return view('kantyna', ['favicon' => 'kantyna.png', 'category' => 'Oznámení', 'title' => 'Kultura']);
    }
}
