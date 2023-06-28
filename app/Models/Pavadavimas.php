<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pavadavimas extends Model
{
    use HasFactory;

    public function getMainTruck($truck){
        return $this->hasOne(Pavadavimas::class)->where('subUnit',$truck->id);
    }
}
