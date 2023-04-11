<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\EpisodesRepositories;
use App\Repositories\EloquentEpisodesRepository;

class SeriesRepositoryProvider extends ServiceProvider
{
   public array $bindings = [
        EpisodesRepositories::class => EloquentEpisodesRepository::class
    ];
}
