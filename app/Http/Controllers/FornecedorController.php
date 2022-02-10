<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {        
        for($i = 0; $i < 5; $i++) {
            $status = rand(0, 1);
            $exibirCnpj = rand(0, 1);
            $ddd =  ['11', '85', '61', '21'];
            $rand_ddd = array_rand($ddd, 1);
            $fornecedores[$i] = [
                'nome' => 'Fornecedor '. (intval($i) + 1), 
                'status' => $status,
                'ddd' => $ddd[$rand_ddd],
                'telefone' => '0000-0000'
            ];
            $fornecedores[$i]['cnpj'] = $exibirCnpj ? '00.000.000/0001-00' : null;           
        }

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
 