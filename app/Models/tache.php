<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tache extends Model
{
    protected $primaryKey = 'id_tache';
    use HasFactory;
    public function projet(){
        return $this->belongsTo(projet::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
