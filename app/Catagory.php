<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    protected $fillable = ['catagory_name','meta_title', 'meta_keyword', 'meta_description','image_path'];
}
