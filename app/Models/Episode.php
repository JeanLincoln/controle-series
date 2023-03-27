<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Season;


class Episode extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function Series(){
        return $this->belongsTo(Season::class);
    }

}
