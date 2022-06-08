<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reunion extends Model
{
    protected $primaryKey = 'id_reunion';

    use HasFactory;
    public function projet(){
        $this->belongsTo(projet::class);
   }
   protected $casts = [
    'date_heure' => 'datetime'
];

}
