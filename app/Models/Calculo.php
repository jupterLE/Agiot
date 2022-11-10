<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class o extends Model
{
    use HasFactory;
    public function calcular() {
        $emprestado  = $_GET['valor'];
        $juros =  $_GET['juros'];

        $totalvalor = ($emprestado * $juros);

        return $totalvalor;
        
    
    } 
}
