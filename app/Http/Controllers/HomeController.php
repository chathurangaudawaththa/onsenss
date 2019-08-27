<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;

class HomeController extends Controller
{
    public function home(){
        $catagories=new Catagory;
        $catagories = Catagory :: with('subCatagories')->get();
        return View('pages.Home')->with('catagories',$catagories);
    }
}
