<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filière extends Model
{
    use HasFactory;

    public function sujets() {
        return $this->hasMany(Sujet::class,'filière_id','NomSpecialité');
    }
}
