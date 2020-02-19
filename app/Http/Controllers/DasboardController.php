<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function index() {
        return view('test', [
            'title' => 'Curso Laravel en Platzi!!!'
        ]);
    }
}
