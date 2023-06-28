<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Truck extends Model
{
    use HasFactory;
    public function subUnits(){
        //dd(date('Y-m-d'));
        return Truck::find(DB::table('pavadavimas')
        ->where('end_date','>=',date('Y-m-d'))
        ->where('truck_id','=',$this->id)
        ->pluck('subUnit')->toArray());
    }
    public function getMainTruck(){
        return Truck::find(DB::table('pavadavimas')->
            where('end_date','>=',date('Y-m-d'))->
            where('subUnit','=',$this->id)->
            get()[0]->truck_id);
    }
    public function isAvailableForSubstitution(){
        $status = false;
        if($this->mainTruck->count()){
            $status = false;
        }else{
            $status = true;
        }
        return $status;
    }
    public function isAvailableToSubstitution($start,$end){

    }
    public function IsOKSubstitutionForTimeFrame($start,$end){
        return $this->hasMany(Pavadavimas::class,'subUnit')->where('end_date','>=',$end)->where('start_date','<=',$start);
    }
    public function canIbesubstituedOnThisTimeFrame($start,$end){
        $s =    $this->hasMany(Pavadavimas::class,'subUnit')->where('end_date','>=',$end)->where('start_date','<=',$start)->count();
        $s +=   $this->hasMany(Pavadavimas::class,)->where('end_date','>=',$end)->where('start_date','<=',$start)->count();
        $status = false;
        if($s > 0){
            $status=false;
        }else{
            $status=true;
        }
        return $status;
    }
}
