<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\SeriesRepositories;
use App\Repositories\EloquentSeriesRepository;

class SeriesRepositoryProvider extends ServiceProvider
{
   public array $bindings = [
        SeriesRepository::class => EloquentSeriesRepository::class
    ];
}
