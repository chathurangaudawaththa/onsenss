<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use File;

class CatagoryController extends Controller
{
    public function save(Request $request){
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
            $imageFullPath='catagory_images\\'.$imageName;
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
        $catagory=Catagory::find($request->input('catId'));
        if(File::exists($catagory->image_path)) {
            File::delete($catagory->image_path);
        }
        $res=Catagory::where('id',  $request->input('catId'))->delete();
        return  $res;
    }
    
    public function getById(Request $request) {
        $catagory=Catagory::find($request->input('catId'));
        return  $catagory;
    }
    
    public function update(Request $request){
        $request->validate([
            'id' => 'required',
            'catagory_name' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
        ]);
        $catagory=Catagory::find($request->input('id'));
        $image=$request->file('image');
        $imageFullPath='';
        
        if($image != null){
            if(File::exists($catagory->image_path)) {
                File::delete($catagory->image_path);
            }
            
            $extention=$image->getClientOriginalName();
            $imageName=time() . ''.$extention;
            $imagePath=public_path('catagory_images');
            $image->move($imagePath,$imageName);
            $imageFullPath='catagory_images\\'.$imageName;
        }else{
            $imageFullPath=$catagory->image_path;
        }
        
        $catagory=Catagory::where('id',$request->input('id'))->update(['catagory_name'=>$request->input('catagory_name'),
            'meta_title'=>$request->input('meta_title'),
            'meta_keyword'=>$request->input('meta_keyword'),
            'meta_description'=>$request->input('meta_description'),
            'image_path'=>$imageFullPath
        ]);
        
        return  redirect('/add-cat')->with('success','Successfully update');
    }
}
