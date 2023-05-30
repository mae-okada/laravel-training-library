<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookListController extends Controller
{
    public function show()
    {
        return view('index');
    }
}
