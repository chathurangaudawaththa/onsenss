<?php

namespace App\Http\Controllers;
use App\SubCatagory;

use Illuminate\Http\Request;

class SubCatagoryController extends Controller
{
    public function save(Request $request){
        $request->validate([
            'catagory_id' => 'required',
            'sub_catagory_name' => 'required'
        ]);
        $subCatagory=SubCatagory::create(['catagory_id'=>$request->input('catagory_id'),
            'sub_catagory_name'=>$request->input('sub_catagory_name')
        ]);
        
        return  redirect('/add-sub')->with('success','Successfully added');
    }
    
    public function getAll(){
        $subCatagories  = new SubCatagory;
        $subCatagories=SubCatagory::with('catagory')->get();
        return $subCatagories;
    }
    
    public function deleteById(Request $request) {
        $res=SubCatagory::where('id',  $request->input('subCatId'))->delete();
        return  $res;
    }
    
    public function getById(Request $request) {
        $catagory=SubCatagory::find($request->input('subCatId'));
        return  $catagory;
    }
    
    public function update(Request $request){
        $request->validate([
            'catagory_id' => 'required',
            'sub_catagory_name' => 'required'
        ]);
        
        $subCatagory=SubCatagory::where('id',$request->input('id'))->update(['catagory_id'=>$request->input('catagory_id'),
            'sub_catagory_name'=>$request->input('sub_catagory_name')
        ]);
        
        return  redirect('/add-sub')->with('success','Successfully update');
    }
}
