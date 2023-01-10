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

    // Akreditacní stadnardy
    public function akreditacni($id)
    {
        $accordion_groups = Document::where('status', 'Schváleno')->where('category_id', $id)->pluck('accordion_group');
        $categorie = Category::where('id', $id)->first();

        $documents = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', $accordion_groups)->orderBy('position')->get();

        $documents1 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 1)->orderBy('position')->get();
        $documents2 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 2)->orderBy('position')->get();
        $documents3 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 3)->orderBy('position')->get();
        $documents4 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 4)->orderBy('position')->get();
        $documents5 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 5)->orderBy('position')->get();
        $documents6 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 6)->orderBy('position')->get();
        $documents7 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 7)->orderBy('position')->get();
        $documents8 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 8)->orderBy('position')->get();
        $documents9 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 9)->orderBy('position')->get();
        $documents10 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 10)->orderBy('position')->get();
        $documents11 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 11)->orderBy('position')->get();
        $documents12 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 12)->orderBy('position')->get();

        return view('standardy.akreditacni', [
            'category'          => 'Standardy',
            'title'             => $categorie->category_name,
            'categorie'         => $categorie,
            'groups'            => $accordion_groups,
            'documents'         => $documents,
            'documents1'        => $documents1,
            'documents2'        => $documents2,
            'documents3'        => $documents3,
            'documents4'        => $documents4,
            'documents5'        => $documents5,
            'documents6'        => $documents6,
            'documents7'        => $documents7,
            'documents8'        => $documents8,
            'documents9'        => $documents9,
            'documents10'       => $documents10,
            'documents11'       => $documents11,
            'documents12'       => $documents12
        ]);
    }

    // Standardy
    public function lecebne($id)
    {
        $accordion_groups = Document::where('status', 'Schváleno')->where('category_id', $id)->pluck('accordion_group');
        $categorie = Category::where('id', $id)->first();
        $documents = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', $accordion_groups)->orderBy('position')->get();

        return view('standardy.lecebne', [
            'category'          => 'Standardy',
            'title'             => $categorie->category_name,
            'categorie'         => $categorie,
            'groups'            => $accordion_groups,
            'documents'         => $documents,
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
