<?php

namespace App\Http\Controllers;

use App\Models\Season;
use App\Models\Episode;

use Illuminate\Http\Request;
use App\Repositories\EloquentEpisodesRepository;


class EpisodesController extends Controller
{

    public function __construct(private EloquentEpisodesRepository $repository){}

    public function index (Season $season)
    {
        return view('episodes.index', ['episodes' => $season->episodes]);
    }

    public function update (Request $request, Season $season)
    {
        $season = $this->repository->update($request,$season);

        return view('episodes.index', ['episodes' => $season->episodes])
            ->with('mensagem.sucesso', "Episodios da temporada '{$season->number}' foram atualizados com sucesso!");
    }
}
