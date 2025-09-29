<?php

namespace App\Http\Controllers;
use App\Models\Ekstrakulikuler;
use Illuminate\view\view;

use Illuminate\Http\Request;

class EkstrakulikulerController extends Controller
{
    public function index() : View
    {
        //get all ekstrakulikuler
        $ekstrakulikuler = Ekstrakulikuler::latest()->paginate(10);

        //render view with ekstrakulikuler
        return view('ekstrakulikuler.index', compact('ekstrakulikuler'));
    }
}
