<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $data['titulo'] = "Minha página de menu legalzinha.";
        return view('menu',$data);
    }
}

