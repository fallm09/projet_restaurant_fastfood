<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = array (  'nom',  'prenom','adresse', 'tel',  'email','fidele'  );
    public static $rules = array( 'nom'=>'required|min:2',
                                 'prenom'=>'required|min:6',
                                 'adresse' =>'required|min:10',
                                 'tel'=>'required|min:9',
                                 'email'=>'required|min:10',
                                 'fidele'=>'required|min:9');


    public function commandes()
    {
        return $this->hasMany('App\Commande');
    }
}
