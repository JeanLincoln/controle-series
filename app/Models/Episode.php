<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Season;


class Episode extends Model
{
    use HasFactory;
    protected $fillable = ['number'];
    public $timestamps = false;

    public function series(){
        return $this->belongsTo(Season::class);
    }

}
