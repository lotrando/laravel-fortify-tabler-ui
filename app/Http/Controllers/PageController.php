<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Category;
use App\Models\Document;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

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

    public function seminare()
    {
        return view('seminare', ['category' => 'Oznámení', 'title' => 'Seminaře']);
    }

    public function sluzby()
    {
        return view('sluzby', ['category' => 'Oznámení', 'title' => 'Změna služeb']);
    }

    public function informace()
    {
        return view('informace', ['category' => 'Oznámení', 'title' => 'Informace']);
    }

    public function kultura()
    {
        return view('kultura', ['category' => 'Oznámení', 'title' => 'Kultura']);
    }


    public function obedy()
    {
        return redirect()->away('http://akordapp/SISAkord/Login.aspx?ReturnUrl=%2fSISAkord%2f');
    }

    public function kantyna()
    {
        return view('kantyna', ['category' => 'Stravování', 'title' => 'Kantýna']);
    }


    // Standardy
    public function akreditacni()
    {
        $categorie = Category::where('id', 1)->first();
        $documents = Document::where('category_id', 1)->with('category', 'addon')->get();
        return view('standardy.standardy', [
            'category'          => 'Standardy',
            'title'             => 'Akreditační',
            'categorie'         => $categorie,
            'documents'         => $documents
        ]);
    }

    public function osetrovatelske()
    {
        $categorie = Category::where('id', 2)->first();
        $documents = Document::where('category_id', 2)->with('category', 'addon')->get();
        return view('standardy.standardy', [
            'category'          => 'Standardy',
            'title'             => 'Ošetřovatelské',
            'categorie'         => $categorie,
            'documents'         => $documents
        ]);
    }

    public function lecebne()
    {
        $categorie = Category::where('id', 3)->first();
        $documents = Document::where('category_id', 3)->with('category', 'addon')->get();
        return view('standardy.standardy', [
            'category'          => 'Standardy',
            'title'             => 'Léčebné',
            'categorie'         => $categorie,
            'documents'         => $documents
        ]);
    }

    public function specialni()
    {
        $categorie = Category::where('id', 4)->first();
        $documents = Document::where('category_id', 4)->with('category', 'addon')->get();
        return view('standardy.standardy', [
            'category'          => 'Standardy',
            'title'             => 'Léčebné',
            'categorie'         => $categorie,
            'documents'         => $documents
        ]);
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
