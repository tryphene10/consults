<?php

namespace App\Models;

use App\Helpers\CustFunc;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image'];
    //
    public function formations(){
        return $this->hasMany('App\formation');
    }
    public function generateReference(){

        if(empty($this->attributes['ref'])){
            do{
                $token = CustFunc::getToken(Config::get('constants.values.reference'));
            }
            while (Categorie::where('ref',$token)->first() instanceof Categorie);
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
            }while(Categorie::where('alias',$alias)->first() instanceof Categorie);
            $this->attributes['alias'] = $alias;
        }
    }


}
