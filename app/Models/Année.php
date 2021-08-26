<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Année extends Model
{
    
    use HasFactory;

    public function sujets() {
        return $this->hasMany(Sujet::class,'année_id','AnnéeSujet');
    }

}
