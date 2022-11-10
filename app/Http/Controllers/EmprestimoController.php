<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use Illuminate\Http\Request;

class EmprestimoController extends Controller
{
    public function index() {
        

        $dadosEmprestimo = emprestimo::all();
        return view ('menu',['dadosEmprestimo'=>$dadosEmprestimo]); 

    }

}