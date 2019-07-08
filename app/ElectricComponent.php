<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElectricComponent extends Model
{
     protected $fillable = ['sub_catagory_id','part_number', 'description', 'series','manufacturer_part_number','manufacturer','quantity_available','unit_price','minimum_quantity','part_status','accessory_Type','for_use_with_related_products','data_sheet_path','image_path'];
}
