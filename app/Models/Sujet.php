<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sujet extends Model
{
    use HasFactory;

    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function annee() {
        return $this->belongsTo(Année::class,'année_id','AnnéeSujet');
    }

    public function auteur() {
        return $this->belongsTo(Auteur::class,'auteur_id','NomAuteur');
    }

    public function filiere() {
        return $this->belongsTo(Filière::class,'filière_id','NomSpecialité');
    }

    public function session() {
        return $this->belongsTo(Session::class,'session_id','NomSession');
    }

    public function region() {
        return $this->belongsTo(Region::class,'region_id','NomRegion');
    }  
    
    public function themes(){
        return $this->belongsToMany(Thème::class);
    }

}
