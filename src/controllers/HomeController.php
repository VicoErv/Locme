<?php

namespace VicoErv\Locme\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $models = config('locme.models');

        return view('locme::home.index', compact(
            'models'
        ));
    }
}