<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Season;

interface EpisodesRepository
{
    public function update(Request $request, Season $season): Season;
}