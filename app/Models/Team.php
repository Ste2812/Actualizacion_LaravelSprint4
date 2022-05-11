<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Cviebrock\EloquentSluggable\Sluggable;



class Team extends Model
{
    use Sluggable;
    use HasFactory;

    protected $fillable= ['nombre', 'tipo', 'num_jugadores', 'descripcion'];

    public function nombre(): Attribute{//se ha pasado la funcion de protected a public para poder funcionar
        return new Attribute(
            get: function($value){
                return ucwords($value);

            },

            set: function($value){
                return strtolower($value);
            }
        );
    }
    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'nombre'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';

    }



}
