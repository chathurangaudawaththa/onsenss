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
                  Semiconductors
               </p>
               <ul>
                  <li> Development Boards, Kits, Programmers</li>
                  <li>  Discrete</li>
                  <li> Embedded Computers</li>
                  <li>Integrated Circuits (ICs)</li>
                  <li>Isolators</li>
                  <li>  LED/Optoelectronics
                  </li>
                  <li> RF, Wireless</li>
                  <li> Sensors, Transducers</li>
               </ul>
               <p>Passives
               </p>
               <ul>
                  <li> Capacitors</li>
                  <li>  Crystals, Oscillators</li>
                  <li> Filters</li>
                  <li>Inductors, Coils, Chokes</li>
                  <li>Potentiometers, Variable Resistors</li>
                  <li> Resistors
                  </li>
                  <li> Thermal Management</li>
               </ul>
               <p>Electromechanical
               </p>
               <ul>
                  <li> Audio</li>
                  <li> Fans</li>
                  <li> Motors, Solenoids, Driver</li>
                  <li>Relays</li>
                  <li>Switches</li>
               </ul>
               <p>Power, Circuit Protection
               </p>
               <ul>
                  <li> Battery Products</li>
                  <li> Circuit Protection</li>
                  <li>Line Protection</li>
                  <li>Power Supplies</li>
                  <li>Transformers</li>
               </ul>
               <p>Automation</p>
               <p>
                  Connectors, Interconnect
               </p>
               <p>
                  Cables, Wires
               </p>
               <p>
                  Test Products
               </p>
               <p>
                  Tools
               </p>
            </div>
            <div class="col-sm-12  col-md-9 right-b">
                  <div class="row">
                        <div class="col-sm-12  col-md-3">
                           <div class="card box-b" >
                              <div class="box-img">               
                                 <img class="card-img-top" src="{{ asset('images/prd1.png') }}" alt="Card image">
                              </div>
                              <div class="card-body">
                                 <p></p>
                                 <h4 class="card-title">Semiconductors</h4>
                                 <p class="card-text">A semiconductor material has an electrical conductivity value falling between that of a conductor, such as metallic copper, and an insulator, such as glass.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12  col-md-3">
                           <div class="card box-b" >
                              <div class="box-img">               
                                 <img class="card-img-top" src="{{ asset('images/prd2.png') }}" alt="Card image">
                              </div>
                              <div class="card-body">
                                 <p></p>
                                 <h4 class="card-title">Semiconductors</h4>
                                 <p class="card-text">A semiconductor material has an electrical conductivity value falling between that of a conductor, such as metallic copper, and an insulator, such as glass.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12  col-md-3">
                           <div class="card box-b" >
                              <div class="box-img">               
                                 <img class="card-img-top" src="{{ asset('images/prd3.png') }}" alt="Card image">
                              </div>
                              <div class="card-body">
                                 <p></p>
                                 <h4 class="card-title">Semiconductors</h4>
                                 <p class="card-text">A semiconductor material has an electrical conductivity value falling between that of a conductor, such as metallic copper, and an insulator, such as glass.</p>
                              </div>
                           </div>
                        </div>
                        
                     </div>
               <div class="row">
                  <div class="col-sm-12  col-md-3">
                     <div class="card box-b" >
                        <div class="box-img">               
                           <img class="card-img-top" src="{{ asset('images/prd1.png') }}" alt="Card image">
                        </div>
                        <div class="card-body">
                           <p></p>
                           <h4 class="card-title">Semiconductors</h4>
                           <p class="card-text">A semiconductor material has an electrical conductivity value falling between that of a conductor, such as metallic copper, and an insulator, such as glass.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12  col-md-3">
                     <div class="card box-b" >
                        <div class="box-img">               
                           <img class="card-img-top" src="{{ asset('images/prd2.png') }}" alt="Card image">
                        </div>
                        <div class="card-body">
                           <p></p>
                           <h4 class="card-title">Semiconductors</h4>
                           <p class="card-text">A semiconductor material has an electrical conductivity value falling between that of a conductor, such as metallic copper, and an insulator, such as glass.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12  col-md-3">
                     <div class="card box-b" >
                        <div class="box-img">               
                           <img class="card-img-top" src="{{ asset('images/prd3.png') }}" alt="Card image">
                        </div>
                        <div class="card-body">
                           <p></p>
                           <h4 class="card-title">Semiconductors</h4>
                           <p class="card-text">A semiconductor material has an electrical conductivity value falling between that of a conductor, such as metallic copper, and an insulator, such as glass.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- <div class="col-sm-12  ">
               <br>
               <div class="blank_2"></div>
            </div> -->
         </div>
      </div>
      </div>
      
@stop 
