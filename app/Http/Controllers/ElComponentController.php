<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ElectricComponent;

class ElComponentController extends Controller
{ 
    public function save(Request $request){
        $request->validate([
            'sub_catagory_id' => 'required',
            'part_number' => 'required',
            'description' => 'required',
            'series' => 'required',
            'manufacturer_part_number' => 'required',
            'manufacturer' => 'required',
            'quantity_available' => 'required',
            'minimum_quantity' => 'required',
            'part_status' => 'required',
            'accessory_Type' => 'required',
            'for_use_with_related_products' => 'required',
            
        ]);
        $image=$request->file('image');
        $imageFullPath='';
        if($image != null){
            $extention=$image->getClientOriginalName();
            $imageName=time() . ''.$extention;
            $imagePath=public_path('el_component_images');
            $image->move($imagePath,$imageName);
            $imageFullPath=$imagePath.'\\'.$imageName;
        }
        
        $dataSheet=$request->file('data_sheet');
        $dataSheetPath='';
        if($dataSheet != null){
            $extention=$dataSheet->getClientOriginalName();
            $dataSheetName=time() . ''.$extention;
            $dataSheetPath=public_path('el_component_data_sheets');
            $dataSheet->move($dataSheetPath,$dataSheetName);
            $dataSheetFullPath=$dataSheetPath.'\\'.$dataSheetName;
        }
        
        $electricComponent=ElectricComponent::create(['sub_catagory_id'=>$request->input('sub_catagory_id'),
            'part_number'=>$request->input('part_number'),
            'series'=>$request->input('series'),
            'description'=>$request->input('description'),
            'manufacturer_part_number'=>$request->input('manufacturer_part_number'),
            'manufacturer'=>$request->input('manufacturer'),
            'quantity_available'=>$request->input('quantity_available'),
            'unit_price'=>$request->input('unit_price'),
            'minimum_quantity'=>$request->input('minimum_quantity'),
            'part_status'=>$request->input('part_status'),
            'accessory_Type'=>$request->input('accessory_Type'),
            'for_use_with_related_products'=>$request->input('for_use_with_related_products'),
            'image_path'=>$imageFullPath,
            'data_sheet_path'=>$dataSheetFullPath
        ]);
        
        return  redirect('/add-component')->with('success','Successfully added');
    }
}
