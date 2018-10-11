@extends('_layouts.master')

@section('body')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-3 order-md-1 mb-4">
          <section class="panel">
                          <div class="panel-body">
                              <input type="text" placeholder="Keyword Search" class="form-control">
                          </div>
                      </section>
                      <section class="panel">
                          <header class="panel-heading">
                              Category
                          </header>
                          <div class="panel-body">
                              <ul class="nav prod-cat">
                                  <li>
                                      <a href="#" class="active"><i class=" fa fa-angle-right"></i> Sweater</a>
                                      <ul class="nav">
                                          <li class="active"><a href="#">- Fashionable</a></li>
                                          <li><a href="#">- Kurti</a></li>
                                          <li><a href="#">- Short Coat</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </div>
                      </section>
                      <section class="panel">
                          <header class="panel-heading">
                              Price Range
                          </header>
                          <div class="panel-body sliders">
                              <div id="slider-range" class="slider"></div>
                              <div class="slider-info">
                                  <span id="slider-range-amount"></span>
                              </div>
                          </div>
                      </section>
                      <section class="panel">
                          <header class="panel-heading">
                              Filter
                          </header>
                          <div class="panel-body">
                              <form role="form product-form">
                                  <div class="form-group">
                                      <label>Sweater</label>
                                      <select class="form-control hasCustomSelect" style="-webkit-appearance: menulist-button; width: 231px; position: absolute; opacity: 0; height: 34px; font-size: 12px;">
                                          <option>Long Coat</option>
                                          <option>Kurti</option>
                                          <option>Short Coat</option>
                                          <option>Fashionable</option>
                                      </select><span class="customSelect form-control" style="display: inline-block;"><span class="customSelectInner" style="width: 209px; display: inline-block;">Greenfly</span></span>
                                  </div>
                                  <div class="form-group">
                                      <label>Color</label>
                                      <select class="form-control hasCustomSelect" style="-webkit-appearance: menulist-button; width: 231px; position: absolute; opacity: 0; height: 34px; font-size: 12px;">
                                          <option>White</option>
                                          <option>Black</option>
                                          <option>Red</option>
                                          <option>Green</option>
                                      </select><span class="customSelect form-control" style="display: inline-block;"><span class="customSelectInner" style="width: 209px; display: inline-block;">White</span></span>
                                  </div>
                                  <div class="form-group">
                                      <label>Type</label>
                                      <select class="form-control hasCustomSelect" style="-webkit-appearance: menulist-button; width: 231px; position: absolute; opacity: 0; height: 34px; font-size: 12px;">
                                          <option>Small</option>
                                          <option>Medium</option>
                                          <option>Large</option>
                                          <option>Extra Large</option>
                                      </select><span class="customSelect form-control" style="display: inline-block;"><span class="customSelectInner" style="width: 209px; display: inline-block;">Small</span></span>
                                  </div>
                                  <button class="btn btn-primary" type="submit">Filter</button>
                              </form>
                          </div>
                      </section>
                      <section class="panel">
                          <header class="panel-heading">
                              GreenFly Discounts
                          </header>
                          <div class="panel-body">
                              <div class="best-seller">
                                  <article class="media">
                                      <a class="pull-left img-thumbnail">
                                          <img src="/assets/images/logo1.png" style="width:50%;height=50%">
                                      </a>
                                      <div class="media-body">
                                          <a href="#" class=" p-head">GF Outlet</a>
                                          <p>Mr. Manish Sahu</p>
                                          <p>Janakpur dham-7</p>
                                          <p>+977-9823660001</p>
                                      </div>
                                  </article>
                                  <article class="media">
                                      <a class="pull-left img-thumbnail">
                                          <img src="/assets/images/logo2.png" style="width:50%;height=50%">
                                      </a>
                                      <div class="media-body">
                                          <a href="#" class=" p-head">GF Head Office</a>
                                          <p>Mr. Mahadev Sah</p>
                                          <p>Kathmandu (Nepal)</p>
                                          <p>+977-9802033724</p>
                                      </div>
                                  </article>
                                  <article class="media">
                                      <a class="pull-left img-thumbnail">
                                          <img src="/assets/images/logo3.jpg" style="width:50%;height=50%">
                                      </a>
                                      <div class="media-body">
                                          <a href="#" class=" p-head">GF Factory</a>
                                          <p>Mr. Mahesh kumar Sah</p>
                                          <p>Balaju,Kathmandu</p>
                                          <p>+977-9802033724</p>
                                      </div>
                                  </article>
                              </div>
                          </div>
                      </section>
        </div>
        <div class="col-md-9 order-md-2">
          <section class="panel">
          <div class="panel-body">
              <div class="pull-right">
                  <ul class="pagination pagination-sm pro-page-list">

                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">»</a></li>
                  </ul>
              </div>
          </div>
      </section>

      <div class="row product-list">
          <div class="col-md-4">
              <section class="panel">
                  <div class="pro-img-box">
                      <img src="/assets/images/img1.jpg" alt="">
                      <a href="#" class="adtocart">
                          <i class="fa fa-shopping-cart">GF</i>
                      </a>
                  </div>

                  <div class="panel-body text-center">
                      <h4>
                          <a href="#" class="pro-title">
                              GreenFly Sweater
                          </a>
                      </h4>
                      <p class="price">Rs. 1500-2000</p>
                  </div>
              </section>
          </div>
          <div class="col-md-4">
              <section class="panel">
                  <div class="pro-img-box">
                      <img src="/assets/images/img2.jpg" alt="">
                      <a href="#" class="adtocart">
                          <i class="fa fa-shopping-cart">GF</i>
                      </a>
                  </div>

                  <div class="panel-body text-center">
                      <h4>
                          <a href="#" class="pro-title">
                              GreenFly Sweater
                          </a>
                      </h4>
                      <p class="price">Rs. 1500-2000</p>
                  </div>
              </section>
          </div>
          <div class="col-md-4">
              <section class="panel">
                  <div class="pro-img-box">
                      <img src="/assets/images/img3.jpg" alt="">
                      <a href="#" class="adtocart">
                          <i class="fa fa-shopping-cart">GF</i>
                      </a>
                  </div>

                  <div class="panel-body text-center">
                      <h4>
                          <a href="#" class="pro-title">
                              GreenFly Sweater
                          </a>
                      </h4>
                      <p class="price">Rs. 1500-2000</p>
                  </div>
              </section>
          </div>
          <div class="col-md-4">
              <section class="panel">
                  <div class="pro-img-box">
                      <img src="/assets/images/img4.jpg" alt="">
                      <a href="#" class="adtocart">
                          <i class="fa fa-shopping-cart">GF</i>
                      </a>
                  </div>

                  <div class="panel-body text-center">
                      <h4>
                          <a href="#" class="pro-title">
                              GreenFly Sweater
                          </a>
                      </h4>
                      <p class="price">Rs. 1500-2000</p>
                  </div>
              </section>
          </div>
          <div class="col-md-4">
              <section class="panel">
                  <div class="pro-img-box">
                      <img src="/assets/images/img5.jpg" alt="">
                      <a href="#" class="adtocart">
                          <i class="fa fa-shopping-cart">GF</i>
                      </a>
                  </div>

                  <div class="panel-body text-center">
                      <h4>
                          <a href="#" class="pro-title">
                              GreenFly Sweater
                          </a>
                      </h4>
                      <p class="price">Rs. 1500-2000</p>
                  </div>
              </section>
          </div>
          <div class="col-md-4">
              <section class="panel">
                  <div class="pro-img-box">
                      <img src="/assets/images/img6.jpg" alt="">
                      <a href="#" class="adtocart">
                          <i class="fa fa-shopping-cart">GF</i>
                      </a>
                  </div>

                  <div class="panel-body text-center">
                      <h4>
                          <a href="#" class="pro-title">
                              GreenFly Sweater
                          </a>
                      </h4>
                      <p class="price">Rs. 1500-2000</p>
                  </div>
              </section>
          </div>
          <div class="col-md-4">
              <section class="panel">
                  <div class="pro-img-box">
                      <img src="/assets/images/img7.jpg" alt="">
                      <a href="#" class="adtocart">
                          <i class="fa fa-shopping-cart">GF</i>
                      </a>
                  </div>

                  <div class="panel-body text-center">
                      <h4>
                          <a href="#" class="pro-title">
                              GreenFly Sweater
                          </a>
                      </h4>
                      <p class="price">Rs. 1500-2000</p>
                  </div>
              </section>
          </div>
          <div class="col-md-4">
              <section class="panel">
                  <div class="pro-img-box">
                      <img src="/assets/images/img8.jpg" alt="">
                      <a href="#" class="adtocart">
                          <i class="fa fa-shopping-cart">GF</i>
                      </a>
                  </div>

                  <div class="panel-body text-center">
                      <h4>
                          <a href="#" class="pro-title">
                              GreenFly Sweater
                          </a>
                      </h4>
                      <p class="price">Rs. 1500-2000</p>
                  </div>
              </section>
          </div>
          <div class="col-md-4">
              <section class="panel">
                  <div class="pro-img-box">
                      <img src="/assets/images/img9.jpg" alt="">
                      <a href="#" class="adtocart">
                          <i class="fa fa-shopping-cart">GF</i>
                      </a>
                  </div>

                  <div class="panel-body text-center">
                      <h4>
                          <a href="#" class="pro-title">
                              GreenFly Sweater
                          </a>
                      </h4>
                      <p class="price">Rs. 1500-2000</p>
                  </div>
              </section>
          </div>
          <div class="col-md-4">
              <section class="panel">
                  <div class="pro-img-box">
                      <img src="/assets/images/img10.jpg" alt="">
                      <a href="#" class="adtocart">
                          <i class="fa fa-shopping-cart">GF</i>
                      </a>
                  </div>

                  <div class="panel-body text-center">
                      <h4>
                          <a href="#" class="pro-title">
                              GreenFly Sweater
                          </a>
                      </h4>
                      <p class="price">Rs. 1500-2000</p>
                  </div>
              </section>
          </div>
          <div class="col-md-4">
              <section class="panel">
                  <div class="pro-img-box">
                      <img src="/assets/images/img11.jpg" alt="">
                      <a href="#" class="adtocart">
                          <i class="fa fa-shopping-cart">GF</i>
                      </a>
                  </div>

                  <div class="panel-body text-center">
                      <h4>
                          <a href="#" class="pro-title">
                              GreenFly Sweater
                          </a>
                      </h4>
                      <p class="price">Rs. 1500-2000</p>
                  </div>
              </section>
          </div>
          <div class="col-md-4">
              <section class="panel">
                  <div class="pro-img-box">
                      <img src="/assets/images/img12.jpg" alt="">
                      <a href="#" class="adtocart">
                          <i class="fa fa-shopping-cart">GF</i>
                      </a>
                  </div>

                  <div class="panel-body text-center">
                      <h4>
                          <a href="#" class="pro-title">
                              GreenFly Sweater
                          </a>
                      </h4>
                      <p class="price">Rs. 1500-2000</p>
                  </div>
              </section>
          </div>
          <div class="col-md-4">
              <section class="panel">
                  <div class="pro-img-box">
                      <img src="/assets/images/img13.jpg" alt="">
                      <a href="#" class="adtocart">
                          <i class="fa fa-shopping-cart">GF</i>
                      </a>
                  </div>

                  <div class="panel-body text-center">
                      <h4>
                          <a href="#" class="pro-title">
                              GreenFly Sweater
                          </a>
                      </h4>
                      <p class="price">Rs. 1500-2000</p>
                  </div>
              </section>
          </div>
          <div class="col-md-4">
              <section class="panel">
                  <div class="pro-img-box">
                      <img src="/assets/images/img14.jpg" alt="">
                      <a href="#" class="adtocart">
                          <i class="fa fa-shopping-cart">GF</i>
                      </a>
                  </div>

                  <div class="panel-body text-center">
                      <h4>
                          <a href="#" class="pro-title">
                              GreenFly Sweater
                          </a>
                      </h4>
                      <p class="price">Rs. 1500-2000</p>
                  </div>
              </section>
          </div>
          <div class="col-md-4">
              <section class="panel">
                  <div class="pro-img-box">
                      <img src="/assets/images/img15.jpg" alt="">
                      <a href="#" class="adtocart">
                          <i class="fa fa-shopping-cart">GF</i>
                      </a>
                  </div>

                  <div class="panel-body text-center">
                      <h4>
                          <a href="#" class="pro-title">
                              GreenFly Sweater
                          </a>
                      </h4>
                      <p class="price">Rs. 1500-2000</p>
                  </div>
              </section>
          </div>
      </div>
        </div>
      </div>
</div>
@endsection
