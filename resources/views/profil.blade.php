@extends('layouts.app')
@section('title','Profil')
@section('content')
      <header id="header" class="top-head">
         <!-- Static navbar -->
         @include('layouts.navbar')
      </header>
      <!-- Modal -->
      <div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Change</h4>
               </div>
               <div class="modal-body">
                  <ul>
                     <li><a href="#"><img src="{{asset('images/flag-up-1.png')}}" alt="" /> United States</a></li>
                     <li><a href="#"><img src="{{asset('images/flag-up-2.png')}}" alt="" /> France </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div id="sidebar" class="top-nav">
         <ul id="sidebar-nav" class="sidebar-nav">
            <li><a href="#">Help</a></li>
            <li><a href="#">How it works</a></li>
            <li><a href="#">Chamb for Business</a></li>
         </ul>
      </div>
      <div class="profile-box banner-p">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="profile-b">
                     <img src="images/lag-63.png" alt="#" />
                     <div class="dit-p">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                           <div class="profile-left-b">
                              <ul>
                                 <li><a href="#">Manufacturer </a></li>
                                 <li><a href="#">Furniture</a></li>
                                 <li><a href="#">Est.2002</a></li>
                                 <li><a href="#">54-100 employees</a></li>
                              </ul>
                           </div>
                           <div class="profile-right-b">
                              <a class="vi-btn" href="#">Visit website</a>
                              <a class="fo-btn" href="#">Follow</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="product-profile-box">
         <div class="container">
            <div class="row">
               <div class="col-md-2 col-sm-4 pr">
                  <div class="profile-pro-left">
                     <div class="left-profile-box-m">
                        <div class="pro-img">
                           <img src="images/150x150.png" alt="#" />
                        </div>
                        <div class="pof-text">
                           <h3>Morgan Mobilya</h3>
                           <div class="check-box"></div>
                        </div>
                        <a href="#">Contact company</a>
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-10 col-sm-8">
                  <div class="profile-pro-right">
                     <div class="panel with-nav-tabs panel-default">
                        <div class="panel-heading clearfix">
                           <ul class="nav nav-tabs pull-left">
                              <li class="active"><a href="#tab1default" data-toggle="tab">Products</a></li>
                              <li class=""><a href="#tab2default" data-toggle="tab">About</a></li>
                              <li class=""><a href="#tab3default" data-toggle="tab">Contact</a></li>
                           </ul>
                           <ul class="nav nav-tabs pull-right right-t">
                              <li class="dropdown">
                                 <a href="#" data-toggle="dropdown">Sort <span class="caret"></span></a>
                                 <ul class="dropdown-menu" role="menu">
                                    <li><a href="#" data-toggle="tab">Kode</a></li>
                                    <li><a href="#" data-toggle="tab">Harga</a></li>
                                    <li><a href="#" data-toggle="tab">jenis</a></li>
                                 </ul>
                        </div>
                        <div class="panel-body">
                           <div class="tab-content">
                              <div class="tab-pane fade in active" id="tab1default">
                                 <div class="product-box-main row">
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="images/tr1.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
                                             </div>
                                             <a href="#" tabindex="0">$1220</a>
                                          </div>
                                          <div class="prod-btn">
                                             <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                             <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                             <p>23 likes</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="images/tr2.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
                                             </div>
                                             <a href="#" tabindex="0">$1220</a>
                                          </div>
                                          <div class="prod-btn">
                                             <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                             <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                             <p>23 likes</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="images/tr3.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
                                             </div>
                                             <a href="#" tabindex="0">$1220</a>
                                          </div>
                                          <div class="prod-btn">
                                             <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                             <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                             <p>23 likes</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="images/tr4.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
                                             </div>
                                             <a href="#" tabindex="0">$1220</a>
                                          </div>
                                          <div class="prod-btn">
                                             <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                             <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                             <p>23 likes</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="images/tr1.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
                                             </div>
                                             <a href="#" tabindex="0">$1220</a>
                                          </div>
                                          <div class="prod-btn">
                                             <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                             <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                             <p>23 likes</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="images/tr2.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
                                             </div>
                                             <a href="#" tabindex="0">$1220</a>
                                          </div>
                                          <div class="prod-btn">
                                             <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                             <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                             <p>23 likes</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="images/tr3.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
                                             </div>
                                             <a href="#" tabindex="0">$1220</a>
                                          </div>
                                          <div class="prod-btn">
                                             <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                             <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                             <p>23 likes</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="images/tr4.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
                                             </div>
                                             <a href="#" tabindex="0">$1220</a>
                                          </div>
                                          <div class="prod-btn">
                                             <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                             <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                             <p>23 likes</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="images/tr1.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
                                             </div>
                                             <a href="#" tabindex="0">$1220</a>
                                          </div>
                                          <div class="prod-btn">
                                             <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                             <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                             <p>23 likes</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="images/tr2.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
                                             </div>
                                             <a href="#" tabindex="0">$1220</a>
                                          </div>
                                          <div class="prod-btn">
                                             <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                             <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                             <p>23 likes</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="images/tr3.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
                                             </div>
                                             <a href="#" tabindex="0">$1220</a>
                                          </div>
                                          <div class="prod-btn">
                                             <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                             <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                             <p>23 likes</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="images/tr4.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
                                             </div>
                                             <a href="#" tabindex="0">$1220</a>
                                          </div>
                                          <div class="prod-btn">
                                             <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                             <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                             <p>23 likes</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="loding-box">
                                    <a href="#">
                                       <div class="sk-wave">
                                          <div class="sk-rect sk-rect1"></div>
                                          <div class="sk-rect sk-rect2"></div>
                                          <div class="sk-rect sk-rect3"></div>
                                          <div class="sk-rect sk-rect4"></div>
                                          <div class="sk-rect sk-rect5"></div>
                                       </div>
                                       <span>Loding more awesome products...</span>
                                    </a>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="tab2default">
                                 <div class="about-box">
                                    <h2>What Does Chamb Do</h2>
                                    <p>Chamb brings buyers and suppliers of goods together to create lasting profitable relationships. Through new connections, economic roads, and insightful associations, we want Chamb to help transform your business into the next Apple!</p>
                                    <p>At Chamb we understand the old adage of ‘it’s not what you know, but Who you know’ is key to success. With that in mind, through much trial and just a little bit of error, we learned the one limiting factor of any business achieving its potential: Their connections.</p>
                                    <p>Before Chamb existed, we noticed that though the power of the net rested at business’ finger tips, resources for discovering manufacturers and suppliers was limited at best and non-existent at worse. Smaller companies that housed great products and potential, were starving through a lack of connectivity.</p>
                                    <p>We took it upon ourselves to change that. We developed a burning desire to create something to bridge the chasms between businesses across country and continent. So, with a goal in mind, a skilled team at hand, Chamb sprung forth: the website that helps discover and build profitable long-lasting networks amongst businesses around the world.</p>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="tab3default"></div>
                              <div class="contact-box">
                                  <p>Coming Soon</p>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
@include('layouts.footer')
@endsection