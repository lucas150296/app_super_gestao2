<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'fornecedor1' ,
                'status' => 'n' ,
                'cnpj' => '00.000.000/00-00',
                'ddd' => '11',
                'telefone' => '00000-0000'
            ],
            1 => [
                'nome' => 'fornecedor2' ,
                'status' => 'n' ,
                'cnpj' => '00.000.000/00-00',
                'ddd' => '18',
                'telefone' => '00000-0000'
            ],
            2=> [
                    'nome' => 'fornecedor3' ,
                    'status' => 'n' ,
                    'cnpj' => '00.000.000/00-00',
                    'ddd' => '32',
                    'telefone' => '00000-0000'
            ]
            ];
            
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
