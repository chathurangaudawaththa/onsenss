@extends('layouts.default')
@section('content')
<div class="container-fluid inner-full ">
         <div class="row tbl-row">
            <div class="col-xs-12 table-div">
               <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                     <tr>
                        <th>Parts Number</th>
                        <th>Data Sheet</th>
                        <th>Image</th>
                        <th>Digi-Key Part Number</th>
                        <th>Manufacturer Part Number</th>
                        <th>Manufacturer</th>
                        <th>Description</th>
                        <th>Quantity Available</th>
                        <th>	Unit Price 
                           USD
                        </th>
                        <th>Minimum Quantity </th>
                        <th>Part Status</th>
                        <th>Accessory Type</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @php ($p3 = 1)
                     @if(count($elComponents) > 0)
                        @foreach($elComponents as $component)
                        <tr>
                           <td>{{$p3}}</td>
                           <td><a class="lnkDatasheet" href="//media.digikey.com/pdf/Data%20Sheets/Sparkfun%20PDFs/PRT-11417_Web.pdf"
                              target="_blank" track-data="ref_page_event=Display Asset;page_title=Datasheet;asset_type=Datasheet">
                              <img class="datasheet-img ds-img" src="resources/images/datasheet.webp" >
                              </a>
                           </td>
                           <td>
                              <div class="zoom zoom-with-pad">
                                 <a href="part_img.html" title="Click to visit"> <img class="datasheet-img" src="{{$component->image_path}}" ></a>
                              </div>
                           </td>
                           <td><a href="item?compID={{$component->id}}" title="Click to visit"> {{$component->part_number}}</a></td>
                           <td> <a href="part_img.html" title="Click to visit">{{$component->manufacturer_part_number}}</a> </td>
                           <td>{{$component->manufacturer}}</td>
                           <td> 	{{$component->description}}</td>
                           <td> 	{{$component->quantity_available}}</td>
                           <td>   		{{$component->unit_price}}</td>
                           <td> {{$component->minimum_quantity}}</td>
                           <td> {{$component->part_status}}</td>
                           <td>   {{$component->subCatagory->catagory_name}}</td>
                           <td> <i class="fas fa-shopping-cart"></i></td>
                        </tr>
                        @php ($p3 = $p3+1)
                        @endforeach
                     @endif
                     
                     
               </table>
            </div>
         </div>
      </div>
      @stop