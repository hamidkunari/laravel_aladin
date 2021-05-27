		@extends('layouts.front-app')

		@section('content')

		<div class="pl-200 pr-200 overflow clearfix">
		<div class="categori-menu-slider-wrapper clearfix">

		<div class="categories-menu">
		<div class="sidebar-widget mb-40" style="margin-top:10px; padding: 10px; ">
                        <h3 class="sidebar-title">Filter by Price</h3>
                        <div class="price_filter">
                            
                            <div id="slider-range"></div>
                         
                            <div class="price_slider_amount">
                                <div class="label-input">
                                    <label>price : </label>
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                                <button type="button" style="background-color: black; border-radius: 5px; color:white; padding: 5px 10px 5px 10px;">Filter</button>

                                
                            </div>
                        </div>
                    </div>
       

       <!- category -->
       <div class="category-heading">
		<h3> Browse Category <i class="pe-7s-angle-down"></i></h3>
		</div>
		<div class="category-menu-list">
		<ul>
		
		<li><a href="{{url('/')}}">View All Category<i class="pe-7s-angle-right"></i></a> </li>

		</ul>
		</div>


<!-- size -->

 <div class="sidebar-widget mb-40" style="margin-top:10px; padding: 10px; ">
                        <h3 class="sidebar-title" style="border-bottom: solid 1px #EBEDEF">size</h3>
                        <div class="product-size">

                            
                            <ul>
                                <li><a  href="">S</li>
                                    <li><a  href="">M</li>
                                        <li><a  href="">L</li>
                               
                            </ul>
                          
                        </div>
                    </div>


		</div>




		<div class="menu-slider-wrapper">
		<div class="electro-product-wrapper wrapper-padding pt-95 pb-45">
		<div class="container-fluid">
		<div class="mb-40" style="margin-left: -20px; margin-top: -90px; border-bottom: solid 1px #EBEDEF">
            <h4 >{{$procats->category_name}} Category</h4>
            </div>
		<div class="top-product-style">

		<div>
		<div id="electro1">
		<div class="custom-row-2">
     
		<div class="custom-col-style-2 custom-col-4">
		<div class="product-wrapper product-border mb-24">
		<div class="product-img-3">
		<a href=""> 
		<img style="height: 200px;" src="/assets/img//products/shopping.png" alt="">
		</a>
		<div class="product-action-right">
		<a class="animate-right" href="" title="View">
		<i class="pe-7s-look"></i>
		</a>
		<a class="animate-top" title="Add To Cart" href="">
		<i class="pe-7s-cart"></i>
		</a>
		<a class="animate-left" title="Wishlist" href="#">
		<i class="pe-7s-like"></i>
		</a>
		</div>
		</div>
		<div class="product-content-4 text-center">
		<div class="product-rating-4">
		<i class="icofont icofont-star yellow"></i>
		<i class="icofont icofont-star yellow"></i>
		<i class="icofont icofont-star yellow"></i>
		<i class="icofont icofont-star yellow"></i>
		<i class="icofont icofont-star"></i>
		</div>
		<h4><a href="">Shoes</a></h4>
		<span>description</span>
		<h5>$ 54</h5>
		<a href="" class="btn btn-warning" style="border-radius: 50px;">Add to cart <i class="fas fa-shopping-cart"></i></a>
		</div>
		</div>
		</div>
		



		</div>
		</div>

		</div>
		</div>
		</div>

		</div>



		</div>
		</div>





		@endsection
