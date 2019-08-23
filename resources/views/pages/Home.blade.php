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
      <a id="button"></a>
      <div class="shink-fix">
         <div class="container-fluid  header-full">
            <div class="container">
               <div class="row header-full-row">
                  <div class="col-sm-12 col-md-7 col-xs-12 logo">
                     <a href="./" title="Onsenss Technologies  | Home Page" >   
                     <img src="{{ asset('images/logo.png') }}" class="img-responsive " alt="Onsenss Technologies ">
                     </a>
                  </div>
                  <div class="col-sm-12 col-md-5 col-xs-12 phone">
                     <p>MORE DETAILS :
                        <a href="tel:01792 654842" title="Click to call" > +94(0) 7110 01415</a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <!-- navi----------------------------------- -->
         <div class="container-fluid navigation">
            <div class="row header-full-row">
               <div class="col-sm-3 col-md-3 col-xs-12 ">
               </div>
               <div class="col-sm-7 col-md-7 col-xs-12 nav-block">
                  <nav class="navbar navbar-inverse">
                     <div class="container-fluid">
                        <div class="navbar-header">
                           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span> 
                           </button>
                           <a class="navbar-brand visible-xs">Menu</a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                           <ul class="nav navbar-nav">
                              <li class="active"><a href="#" class="link">Semconductor</a></li>
                              <li><a href="#" class="link">Passives</a></li>
                              <li><a href="#" class="link">Electromechaniacl	</a></li>
                              <li><a href="#" class="nav-link nav-link-ltr">	Power, Circuit Protection		</a></li>
                           </ul>
                        </div>
                     </div>
                  </nav>
               </div>
               <div class="col-sm-2 col-md-2 col-xs-12 cart">
                  <button type="button"data-toggle="tooltip" class="cart_btn" data-placement="right" title="Price">
                  Cart <i class="fas fa-shopping-cart"></i>     
                  </button>
               </div>
            </div>
         </div>
      </div>
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
      <div class="container-fluid footer">
         <div class="container">
            <div class="row ">
               <div class="col-xs-12 col-sm-6 col-md-6 left-ft ">
                  <div class="col-xs-12 top-1">
                     <p><strong>Stay Connected!</strong></p>
                     <section class="home-newsletter">
                        <div class="single">
                           <form action="">
                              <div class="input-group">
                                 <input type="email" class="form-control" placeholder="Enter your email">
                                 <span class="input-group-btn">
                                 <button class="btn btn-theme" type="submit">Subscribe</button>
                                 </span>
                              </div>
                           </form>
                        </div>
                     </section>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4 ">
                     <h4>Information</h4>
                     <ul>
                        <li><a href="">Term & Conditions </a></li>
                        <li><a href="">Site Map</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Help & Support</a></li>
                     </ul>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4 ">
                     <h4>Sri Lanka</h4>
                     <ul>
                        <li><a href="mailto:text@mail.com">text@mail.com</a></li>
                        <li><a href="tel:94(0) 7110 01415">94(0) 7110 01415</a></li>
                     </ul>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4 ">
                     <h4>International</h4>
                     <ul>
                        <li>Africa</li>
                        <li>Asia</li>
                        <li>Europe</li>
                        <li> North America</li>
                        <li>South America</li>
                        <li>Australia</li>
                     </ul>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-4 col-md-6 ft-right">
                  <div class="col-xs-12 col-sm-6 col-md-7 box-3">
                     <img src="{{ asset('images/logo.png') }}" class="img-responsive " alt="Onsenss Technologies ">
                     <p>Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Voluptate saepe sed 
                        consequatur, perferendis vel ad aliquam
                        est nesciunt odio veritatis sequi 
                        voluptatem suscipit, eos quisqua m 
                        quos hic iste ratione esse
                     </p>
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-5 "><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftechited%2F&tabs=timeline&width=230&height=310&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="230" height="270" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></div>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid container-footer-copyright">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <p>
                     <span class="company-name">Onsenss Technologies  </span> © 2019 | All Rights Reserved |
                     Developed by
                     <a href="" target="_blank" title="Click to visit">
                     <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABkAAD/4QONaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6NjM4OGEzMzMtMDQ5Yy00MjQ1LWI1YjMtZGY0OWJkZTRiMmE2IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjdFMTMwNjc0QUI2MTExRTk5NzQ0OUM2QkY4OTM4NDQxIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjdFMTMwNjczQUI2MTExRTk5NzQ0OUM2QkY4OTM4NDQxIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOmMwZjViMmRlLWJhZTctOGU0Yy05YzFlLWYyZTk3NjBlMDZhYyIgc3RSZWY6ZG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOjgzZGQ1YjY5LWE4Y2ItMTFlOS05MzA5LWY1ZmYxMTU3OGYzMCIvPiA8L3Jk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" alt="" />
                  </p>
               </div>
            </div>
         </div>
      </div>
@stop 
