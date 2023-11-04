<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class automovil extends Model
{
    protected $table="automoviles";
    protected $primarykey="ci";
    use HasFactory;
    public function nivel(){
        return $this->belongsTo(Nivel::class, 'nivel_id', 'id');
    }
}
