<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dominio;
use App\Models\Hospedagem;
use Illuminate\Support\Facades\Auth;

class DominioController extends Controller
{
    public function index()
    {
        return view('dominio-create');
    }

    public function create()
    {
        return view('dominio-create');
    }

    public function store(Request $request)
    {
        $opcoes = [
            '1' => '.com.br',
            '2' => '.com',
            '3' => '.net',
        ];
        $locais = [
            '1' => 'hostinger',
            '2' => 'localweb',
            '3' => 'hostgator',
        ];

        /*VALIDACAO CAMPOS*/
        $validated = $request->validate([
            'nome' => 'required',
            'extensao' => 'required|numeric',
            'local' => 'required|numeric',
            'vencimento' => 'required|date'
        ]);

        /*VERIFICAR VALIDAÇÃO */
        if(!$validated){
            return redirect()->route('dominio.create')->with('erro', 'Preencha os dados corretamente!');
        }
        
        /*VERIFICAR EXISTENCIA DOMINIO */
        $opcaoSelecionada = $request->input('extensao');
        $extensao = $opcoes[$opcaoSelecionada];

        $existe = Dominio::where('nome','=', $request->nome."".$extensao)->exists();
        if($existe){
            return redirect()->route('dominio.create')->with('erro', 'Dominio ja esta cadastrado!');
        }
    
        /*CADASTRAR DOMINIO*/
        $dominio = $request->all(); 
        $opcaoSelecionada = $request->input('extensao');
        $extensao = $opcoes[$opcaoSelecionada];
        $dominio['nome'] = $request->nome."".$extensao;         
        $dominio['user_id'] = Auth::id(); //Pega o ID usuario logado dinamicamente
        $idDominio = Dominio::Create($dominio);

        /*CADASTRAR HOSPEDAGEM*/
        $hospedagem = $request->all();
        $opcaoSelecionada2 = $request->input('local');
        $local = $locais[$opcaoSelecionada2]; 
        $hospedagem['hospedeiro'] = $local;
        $hospedagem['dominio_id'] = $idDominio->id;
        Hospedagem::create($hospedagem);
               
        return redirect()->route('dominio')->with('sucesso', 'Dominio cadastrado com sucesso !');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
