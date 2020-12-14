<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = array( 'dateC', 'montant', 'vente', 'reglement_id', 'client_id', 'etat_commande_id');

    public static $rules = array('dateC'=>'required |min: 100',
                                 'montant'=>'required |max:100',
                                 'vente'=>'required |max:100',
                                 'reglement_id'=>'required |max:12',
                                 'client_id'=>'required |max:12',
                                 'client_id'=>'required |max:12',
                                 'etat_commande_id'=>'required |max:12',);

    public function reglement()
    {
        return $this->belongsTo('App\Reglement');
    }
    public function client()
    {
        return $this->belongsTo('App\Client');
    }
    public function etatCommande()
    {
        return $this->belongsTo('App\EtatCommande');
    }
    public function produits()
    {
        return $this->belongsToMany('App\Produit');
    }
}
