 @extends('layouts.default')
@section('content')
<a id="button"></a>
<!-- slider--------------------------------------------------------------------------------------------------------- -->
<div class="container-fluid slider-full">
         <div class="row">
            <!-- Wrapper for slides -->
            <div  >
               <div class="item ">
                  <img src="{{ asset('images/slider.jpg') }}" class="img-responsive" alt="Onsenss Technologies ">
               </div>
               <div class="col-sm-6 col-md-8 col-xs-12 ">
                  <div class="carousel-caption" >
                     <h3>Sri Lankan Largest Selection<br>
                        <span> of Electronic Components Available for Immediate Shipment</span>
                     </h3>
                     <form method="POST" class="form-1">
                        <ul>
                           <li>
                              <div class="form-group">
                                 <select class="form-control" id="sel1">
                                    <option>Select Category</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                 </select>
                              </div>
                           </li>
                           <li>
                              <div class="form-group row">
                                 <input class="form-control text-1" rows="5" value="Find with us...." type="text" name="cu_date" id="example-text-input">
                           </li>
                           <li>   <button type="button" class="btn btn-info">Info Serch</button></li>
                        </ul>
                     </form>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-xs-12 " >
                     <div id="carousel-example-generic" class="carousel slide carousel-fade carousel-caption2 " data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox" data-aos="zoom-in-left"
                           data-aos-anchor-placement="top-bottom"  data-aos-duration="2000">
                           <div class="item active" >
                              <img src="{{ asset('images/diagnostic.png') }}" class="img-responsive" alt="Onsenss Technologies ">
                           </div>
                           <div class="item">
                              <img src="{{ asset('images/diagnostic1.png') }}" class="img-responsive" alt="Onsenss Technologies ">
                           </div>
                           <div class="item">
                              <img src="{{ asset('images/diagnostic2.png') }}" class="img-responsive" alt="Onsenss Technologies ">
                           </div>
                        </div>
                        <!-- <div class="" >
                           </div> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid container-a">
         <div class="container">
            <div class="row">
               <div class="col-sm-3 col-md-3 col-xs-12 ">
                  <img src="{{ asset('images/icon1.png') }}" class="img-responsive hvr-float wow fadeInUp" alt="Onsenss Technologies ">
                  <p>New Products</p>
               </div>
               <div class="col-sm-3 col-md-3 col-xs-12 ">
                  <img src="{{ asset('images/icon2.png') }}" class="img-responsive hvr-float wow fadeInUp" alt="Onsenss Technologies ">
                  <p>Reference Designs</p>
               </div>
               <div class="col-sm-3 col-md-3 col-xs-12 ">
                  <img src="{{ asset('images/icon3.png') }}" class="img-responsive hvr-float wow fadeInUp" alt="Onsenss Technologies ">
                  <p>Immediate Delevery</p>
               </div>
               <div class="col-sm-3 col-md-3 col-xs-12 ">
                  <img src="{{ asset('images/icon4.png') }}" class="img-responsive hvr-float wow fadeInUp" alt="Onsenss Technologies ">
                  <p>24 / 7 Service</p>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid container-b">
         <div class="row">
            <div class="col-sm-12  col-md-3 b-left">
               <p><strong>Products </strong>View All<br>
               @if(count($catagories) > 0)
                  @foreach($catagories as $catagory)
                     <p>
                        {{$catagory->catagory_name}}
                     </p>
                     <ul>
                        @if(count($catagory->subCatagories) > 0)
                           @foreach($catagory->subCatagories as $sub_catagory)
                              <li> {{$sub_catagory->sub_catagory_name}}</li>
                           @endforeach
                        @endif
                     </ul>
                  @endforeach
               @endif
               
            </div>
            <div class="col-sm-12  col-md-9 right-b">
               @php ($p3 = 0)
               @if(count($catagories) > 0)
                  @for ($i = 0; $i < count($catagories); $i++)
                     @if($p3==12)
                        <div class="row">
                     @endif
                     
                        <div class="col-sm-12  col-md-3">
                           <div class="card box-b" >
                              <div class="box-img">               
                                 <img class="card-img-top" src="{{ $catagories[$i]->image_path }}" alt="Card image">
                              </div>
                              <div class="card-body">
                                 <p></p>
                                 <h4 class="card-title">{{$catagories[$i]->catagory_name}}</h4>
                                 <p class="card-text">{{$catagories[$i]->meta_description}}</p>
                              </div>
                           </div>
                        </div>
                     @if($p3==12)
                        </div>
                     @endif
                     
                     @php ($p3 = $p3+3)
                  @endfor
               @endif
                        
            </div>
            <!-- <div class="col-sm-12  ">
               <br>
               <div class="blank_2"></div>
            </div> -->
         </div>
      </div>
      </div>
      
@stop 
