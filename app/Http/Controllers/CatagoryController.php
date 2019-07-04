<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;

class CatagoryController extends Controller
{
    public function catagorySave(Request $request){
        $request->validate([
            'catagory_name' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
        ]);
        $image=$request->file('image');
        $imageFullPath='';
        if($image != null){
            $extention=$image->getClientOriginalName();
            $imageName=time() . ''.$extention;
            $imagePath=public_path('catagory_images');
            $image->move($imagePath,$imageName);
            $imageFullPath=$imagePath.'\\'.$imageName;
        }
        
       
        $catagory=Catagory::create(['catagory_name'=>$request->input('catagory_name'),
            'meta_title'=>$request->input('meta_title'),
            'meta_keyword'=>$request->input('meta_keyword'),
            'meta_description'=>$request->input('meta_description'),
            'image_path'=>$imageFullPath
        ]);
        
        return  redirect('/add-cat')->with('success','Successfully added');
    }
    
    public function getAll(){
        $catagories = Catagory :: All();
        return $catagories;
    }
    
    public function deleteById(Request $request) {
        $res=Catagory::where('id',  $request->input('catId'))->delete();
        return  $res;
    }
    
    public function getById(Request $request) {
        $catagory=new Catagory;
        $catagory=Catagory::where('id',  $request->input('catId'))->get();
        return  $catagory;
    }
}
