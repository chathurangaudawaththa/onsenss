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
                     <tr>
                        <td>1</td>
                        <td><a class="lnkDatasheet" href="//media.digikey.com/pdf/Data%20Sheets/Sparkfun%20PDFs/PRT-11417_Web.pdf"
                           target="_blank" track-data="ref_page_event=Display Asset;page_title=Datasheet;asset_type=Datasheet">
                           <img class="datasheet-img ds-img" src="resources/images/datasheet.webp" >
                           </a>
                        </td>
                        <td>
                           <div class="zoom zoom-with-pad">
                              <a href="part_img.html" title="Click to visit"> <img class="datasheet-img" src="resources/images/prt1.png" ></a>
                           </div>
                        </td>
                        <td><a href="part_img.html" title="Click to visit"> 1168-1413-ND</a></td>
                        <td> <a href="part_img.html" title="Click to visit">PRT-11417</a> </td>
                        <td> SparkFun Electronics</td>
                        <td> 	ARDUINO STACKABLE HEADER KIT - R</td>
                        <td> 	1,273 - Immediate</td>
                        <td>   		$1.50000</td>
                        <td> 1</td>
                        <td> Active</td>
                        <td>   Connector</td>
                        <td> <i class="fas fa-shopping-cart"></i></td>
                     </tr>
                     
               </table>
            </div>
         </div>
      </div>
      @stop