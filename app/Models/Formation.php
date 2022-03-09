<?php

namespace App\Models;

use App\Helpers\CustFunc;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Formation extends Model
{
    use HasFactory;
    /*public function formation_programmers(){
        return $this->hasMany('App\models\formation_programmer', 'formation_programmer_id');
    }*/
    public function cibles(){
        return $this->hasMany('App\models\cible');
    }

    public function user(){
        return $this->belongsTo('App\models\user','user_id');
    }

    public function objectifs(){
        return $this->hasMany('App\models\objectif');
    }
    public function modules(){
        return $this->hasMany('App\models\module');
    }
    public function categorie(){
        return $this->belongsTo('App\models\categorie', 'categorie_id');
    }
    public function generateReference(){

        if(empty($this->attributes['ref'])){
            do{
                $token = CustFunc::getToken(Config::get('constants.values.reference'));
            }
            while (Formation::where('ref',$token)->first() instanceof Formation);
            $this->attributes['ref'] = $token;

            return true;
        }
        return false;
    }

    //To generate an alias for the object based on the name of that object.
    public function generateAlias($name){
        $append = Config::get('constants.values.zero');
        if(empty($this->attributes['alias'])){
            do{
                if($append == Config::get('constants.values.zero')){
                    $alias = CustFunc::toAscii($name);
                }else{
                    $alias = CustFunc::toAscii($name)."-".$append;
                }
                $append += Config::get('constants.values.one');
            }while(Formation::where('alias',$alias)->first() instanceof Formation);
            $this->attributes['alias'] = $alias;
        }
    }

}
