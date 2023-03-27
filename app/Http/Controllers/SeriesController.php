<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Series;
use App\Http\Requests\SeriesFormRequest;

class SeriesController extends Controller
{
    public function index (Request $request)
    {
        $Series = Series::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('Series.index', compact('Series'))->with('mensagemSucesso', $mensagemSucesso);
    }
    
    public function create()
    {
        return view('Series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        
        $Series = Series::create($request->all());
        return to_route('Series.index')->with('mensagem.sucesso', "Série '{$Series->nome}' adicionada com sucesso!");
    }

    public function destroy(Series $Series, Request $request)
    {
        $Series->delete();
        return to_route('Series.index')->with('mensagem.sucesso', "Série '{$Series->nome}' removida com sucesso!");
    
    }

    public function edit(Series $Series)
    {
        return view('Series.edit')->with('Series', $Series);
    
    }

    public function update(Series $Series, SeriesFormRequest $request)
    {
        $Series->fill($request->all());
        $Series->save();

        return to_route('Series.index')->with('mensagem.sucesso', "Série '{$Series->nome}' atualizada com sucesso!");
    
    }
}
