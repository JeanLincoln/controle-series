<?php

namespace App\Repositories;

use App\Models\Season;
use App\Models\Episode;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EloquentEpisodesRepository implements EpisodesRepository
{
    public function update(Request $request, Season $season): Season
    {
        DB::beginTransaction();

        $watchedEpisodes = $request->episodes;

        if($watchedEpisodes){

            DB::table('episodes')
                ->where('season_id',$season->id)
                ->whereIn('id', $watchedEpisodes)
                ->update(['watched' => 1]);
            
            DB::table('episodes')
                ->where('season_id',$season->id)
                ->whereNotIn('id', $watchedEpisodes)
                ->update(['watched' => 0]);

                DB::commit();

                return $season;
        }
        
    DB::table('episodes')
        ->where('season_id',$season->id)
        ->update(['watched' => 0]);
        
        DB::commit();

        return $season;
    }
}