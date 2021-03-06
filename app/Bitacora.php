<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    //
    public function prospecto()
	{
	    return $this->belongsTo('App\Prospecto', 'prospecto_id');
	}

	public function user()
	{
	    return $this->belongsTo('App\User', 'user_id');
	}

	public function etapa()
	{
	    return $this->belongsTo('App\Etapa', 'etapa_id');
	}
	public function etapa_anterior()
	{
	    return $this->belongsTo('App\Etapa', 'etapa_anterior_id');
	}
}
