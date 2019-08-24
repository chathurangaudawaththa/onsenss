@extends('layouts.default')
@section('content') 
<div class="container-fluid inner-full ">
         <div class="row innr-div">
            <div class="col-xs-12 col-md-3 part-v-left ">
               <div class="zoom-1 "><img src="resources/images/PRT-11417_sml.webp" class="img-thumbnail" alt="Cinque Terre"></div>
            </div>
            <div class="col-xs-12 col-md-6">
               <table class="table table-bordered">
                  <thead>
                     <tr class="table-info">
                        <th scope="col">
                           <h5>Product Overview</h5>
                        </th>
                        <td>
                           <p class="hidden">text</p>
                        </td>
                     </tr>
                  </thead>
                  <tbody>
                     <tr >
                        <th scope="row">Digi-Key Part Number</th>
                        <td >{{$component->part_number}}</td>
                     </tr>
                     <tr>
                        <th scope="row">Manufacturer Part Number</th>
                        <td>	{{$component->manufacturer_part_number}}</td>
                     </tr>
                     <tr>
                        <th scope="row"> Manufacturer</th>
                        <td>{{$component->manufacturer}}</td>
                     </tr>
                     <tr>
                        <th scope="row">Description</th>
                        <td>{{$component->description}}</td>
                     </tr>
                     <tr>
                        <th scope="row">Quantity Available</th>
                        <td>{{$component->quantity_available}}</td>
                     </tr>
                     <tr>
                        <th scope="row">Unit Price USD	</th>
                        <td>{{$component->unit_price}}</td>
                     </tr>
                     <tr>
                        <th scope="row">Minimum Quantity	</th>
                        <td>{{$component->minimum_quantity}}</td>
                     </tr>
                     <tr>
                        <th scope="row">Series</th>
                        <td>{{$component->series}}</td>
                     </tr>
                     <tr>
                        <th scope="row">Part Status		</th>
                        <td>{{$component->part_status}}	</td>
                     </tr>
                     <tr>
                        <th scope="row">Accessory</th>
                        <td>{{$component->subCatagory->catagory_name}}</td>
                     </tr>
                     <tr>
                        <th scope="row">     Type	For Use With/Related Products	</th>
                        <td>Arduino Boards or other MCU Boards	</td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="col-xs-12 col-md-3">
               <div class="box">
                  <div class="col-xs-12">
                     <p>
                     <h5>Price & Procurement</h5>
                     </p>
                  </div>
                  <div class="col-xs-12  col-md-6 ">
                     <p>Quantity</p>
                  </div>
                  <div class="col-xs-12  col-md-6 space-div">
                     <input type="text"   class="form-control" name="qty" id="qty" size="7" maxlength="9" value="1">
                  </div>
                  <div class="col-xs-12 space-div">
                     <select name="part" class="form-control" id="partNumber">
                        <option value="1568-1413-ND">1568-1413-ND</option>
                        <option value="PRT-11417">PRT-11417 ‎</option>
                     </select>
                  </div>
                  <div class="col-xs-12 space-div">
                     <input type="text"   class="form-control" name="qty" id="qty" placeholder="Customer Reference" >
                  </div>
                  <div class="col-xs-12 space-div">
                     <button type="button" class="btn btn-danger">Add to Cart</button>
                  </div>
                  <table class="table">
                     <thead class="thead-dark">
                        <tr>
                           <th scope="col">Price Break</th>
                           <th scope="col">Unit Price</th>
                           <th scope="col">Extended Price</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="side-tbl" >
                           <th scope="row">
                              <p>1</p>
                           </th>
                           <td>
                              <p>1.50000</p>
                           </td>
                           <td>
                              <p>$1.50</p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      @stop