<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dominio;
use App\Models\Hospedagem;

class RelatorioController extends Controller
{
    public function index()
    {
        return view('relatorios');
    }

    /*RELATORIO 1 DOMINIOS */
    public function relatorio1()
    {
        $dominios = Dominio::with(['user','hospedagem'])->get();
        return view('relatorio1', compact('dominios'));
    }

    /*RELATORIO 2 HOSPEDAGEM*/
    public function relatorio2()
    {
        $locais =  Hospedagem::select('hospedeiro', DB::raw('count(*) as dominio_id'))
        ->groupBy('hospedeiro')
        ->orderBy('dominio_id', 'asc')
        ->get();
        return view('relatorio2', compact('locais'));
    }

    /*RELATORIO 3 VENCIMENTOS*/
    public function relatorio3()
    {
        $vencimentos = Dominio::join('hospedagens', 'hospedagens.dominio_id', '=', 'dominios.id')
        ->orderBy('hospedagens.vencimento', 'desc')
        ->get();

        return view('relatorio3', compact('vencimentos'));
    }
}
