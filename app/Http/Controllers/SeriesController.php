<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Series;
use App\Models\Season;
use App\Models\Episode;
use App\Http\Requests\SeriesFormRequest;
use App\Repositories\SeriesRepository;


class SeriesController extends Controller
{

    public function __construct(private SeriesRepository $repository)
    {

    }

    public function index (Request $request)
    {
        $series = Series::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index', compact('series'))->with('mensagemSucesso', $mensagemSucesso);
    }
    
    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        
        $serie = $this->repository->add($request);

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$serie->nome}' adicionada com sucesso!");
    }

    public function destroy(Series $series, Request $request)
    {
        $series->delete();
        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso!");
    
    }

    public function edit(Series $series)
    {
        return view('series.edit')->with('series', $series);
    
    }

    public function update(Series $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->nome}' atualizada com sucesso!");
    
    }
}
