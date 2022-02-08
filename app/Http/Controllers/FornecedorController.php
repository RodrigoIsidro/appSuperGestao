<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        for($i = 0; $i < 50; $i++) {
            $fornecedores[$i] = 'Fornecedor '.$i;
        }

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
