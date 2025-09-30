<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\view\view;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index() : View
    {
        //get all ekstrakulikuler
        $berita = Berita::latest()->paginate(10);

        //render view with ekstrakulikuler
        return view('berita', compact('berita'));
    }
}
