<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function Carta(){
        return view('home.carta');
    }
    public function Galeria(){
        return view('home.galeria');
    }
    public function Contacto(){
        return view('home.contacto');
    }
}
