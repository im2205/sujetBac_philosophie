<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    public function sujets() {
        return $this->hasMany(Sujet::class,'region_id','NomRegion');
    }
}
