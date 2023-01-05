<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Oznámení
    public function zmeny()
    {
        return view('zmeny', ['category' => 'Oznámení', 'title' => 'Změny v dokumentaci']);
    }

    public function akord()
    {
        return view('akord', ['category' => 'Oznámení', 'title' => 'Akord']);
    }

    public function servis()
    {
        return view('servis', ['category' => 'Oznámení', 'title' => 'Odstávky a servis']);
    }

    public function kultura()
    {
        return view('kultura', ['category' => 'Oznámení', 'title' => 'Kultura']);
    }


    // Stravování
    public function obedy()
    {
        return redirect()->away('http://akordapp/SISAkord/Login.aspx?ReturnUrl=%2fSISAkord%2f');
    }

    public function kantyna()
    {
        return view('kantyna', ['category' => 'Oznámení', 'title' => 'Kantýna']);
    }


    // Media
    public function radio()
    {
        return redirect()->away('http://192.168.0.10/data/hudba/R%c3%a1dia/Evropa%202.m3u');
    }

    public function video()
    {
        return view('videa', ['category' => 'Media', 'title' => 'Videa']);
    }
}
