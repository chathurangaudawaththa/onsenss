<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCatagory extends Model
{
    protected $fillable = ['catagory_id','sub_catagory_name'];
    
    public function catagory()
    {
        return $this->hasOne('App\Catagory','id','catagory_id');
    }
}
