<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
	protected $table = 'emails';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'identificador', 'destinatario', 'registrada_por', 'leida', 'comment'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
   }
