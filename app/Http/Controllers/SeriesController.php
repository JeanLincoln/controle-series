<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Serie;

class SeriesController extends Controller
{
    public function index (Request $request)
    {
        $series = Serie::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index', compact('series'))->with('mensagemSucesso', $mensagemSucesso);
    }
    
    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();
        $request->session()->flash('mensagem.sucesso', 'Série adicionada com sucesso');
        return to_route('series.index');
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->series);
        $request->session()->flash('mensagem.sucesso', 'Série removida com sucesso');
        return to_route('series.index');
    }
}
