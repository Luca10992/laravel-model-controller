<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function errorPage() {
        abort(404);
        return view('emptyPage');
    }

    public function detail($index) {
        $movies = Movie::all();
        return view('detail', compact('movies', 'index'));
    }
}