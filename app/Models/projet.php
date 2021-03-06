<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projet extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_projet';

    protected $fillable = [ 
        'id_projet ', 'Nom_projet', 'Date_début', 'Date_fin', 'description_projet', 'etat_projet', 'Chef_projet '
    ];

    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function taches(){
        return $this->hasMany(tache::class);
    }
    public function reunions(){
        return $this->hasMany(reunion::class);
    }
}
