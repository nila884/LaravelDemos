<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //I called id properties_id instead of property 
    protected $fillable = ['properties_id', 'filename'];
    //
    public function property()
    {
        return $this->belongsTo('App\Properties');
    }
}
