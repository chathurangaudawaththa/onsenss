<?php

namespace App;

use \Illuminate\Contracts\Auth\Authenticatable;
use \Illuminate\Database\Eloquent\Model;
//use \Illuminate\Auth\Authenticatable;

class User extends Model implements Authenticatable{

    use \Illuminate\Auth\Authenticatable;

}
