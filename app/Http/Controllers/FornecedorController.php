<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {        
        for($i = 0; $i < 50; $i++) {
            $status = rand(0, 1);
            $exibirCnpj = rand(0, 1);
            $fornecedores[$i] = [
                'nome' => 'Fornecedor '. (intval($i) + 1), 
                'status' => $status
            ];
            ($exibirCnpj ? $fornecedores[$i]['cnpj'] = '00.000.000/0001-00' : '');            
        }

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
 