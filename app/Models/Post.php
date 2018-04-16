<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = "publicacion";
    protected $primaryKey = "id";
    public $timestamps = true;

    public function user(){
    	return $this->belongsTo('App\User', 'usuario_id', 'id');
    }

    public function category(){
    	return $this->belongsTo('App\Models\Category', 'categoria_id', 'id');
    }

    public function comments() {
        return $this->hasMany('App\Models\Comment', 'publicacion_id', 'id');
    }

    public function status () {
        return $this->belongsTo('App\Models\EntitiesStatus', 'estado_id', 'id');
    }
}