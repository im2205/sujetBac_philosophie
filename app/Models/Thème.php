<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thème extends Model
{
    use HasFactory;

    public function sujets(){
        return $this->belongsToMany(Sujet::class);
    }
}
