<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class bookController extends Controller
{
    public function __invoke(){
        $books = book::get();
        return view('home', compact('books'));
    }
}
