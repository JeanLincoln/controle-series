<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Series;
use App\Models\Episodes;

class Season extends Model
{
    use HasFactory;

    public function Series(){
        return $this->belongsTo(Series::class);
    }

    public function episodes()
    {
        return $this->hasMany(Episodes::class);
    }
}
