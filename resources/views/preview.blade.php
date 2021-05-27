
@extends('layouts.front-app')


@section('content')

<div class="product-details ptb-100 pb-90">
    <div class="container">
        <div class="row" style="box-shadow: 0px 2px 1px 0px ; border-radius: 5px; padding:30px 0px 30px 0px; border:solid 1px #F4F6F6;">
            <div class="col-md-12 col-lg-6 col-12">
                <div class="product-details-5 pr-70">
                    <img style="height: 300px;" src="{{asset($product->image)}}" alt="">
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-12" style="border-left: solid 2px #F4F6F6; border-radius: 1px; padding:30px 0px 30px 10px;">
                <div class="product-details-content">
                    <h3>{{$product->product_name}}</h3>
                    <div class="rating-number">
                        <div class="quick-view-rating">
                            <i style="color:black" class="pe-7s-star red-star"></i>
                            <i style="color:black" class="pe-7s-star red-star"></i>
                            <i style="color:black" class="pe-7s-star"></i>
                            <i style="color:black" class="pe-7s-star"></i>
                            <i style="color:black" class="pe-7s-star"></i>
                        </div>
                        <div class="quick-view-number">
                            <span style="color:black">2 Ratting (S)</span>
                        </div>
                    </div>
                    <div class="details-price">
                        <span>${{$product->selling_price}}</span>
                    </div>
                    <p style="color:black;">{{$product->description}}</p>

                    <div class="quickview-plus-minus">

                        <div class="quickview-btn-cart">
                            <a style="background-color: #F1C40F; margin-top: 10px; margin-bottom: 10px; border-radius: 5px; padding-bottom: 23px; " class="btn" href="{{url('addToCart',$product->id)}}">add to cart</a>
                        </div>

                    </div>
                    <div class="product-details-cati-tag mt-35">
                        <ul>
                            <li style="color:black" class="categories-title">Categories :</li>
                            <li><a style="color:black" href="#">fashion</a></li>
                            <li><a style="color:black" href="#">electronics</a></li>
                            <li><a style="color:black" href="#">toys</a></li>
                            <li><a style="color:black" href="#">food</a></li>
                            <li><a style="color:black" href="#">jewellery</a></li>
                        </ul>
                    </div>
                    <div class="product-details-cati-tag mtb-10">
                        <ul>
                            <li style="color:black" class="categories-title">Tags :</li>
                            <li><a style="color:black" href="#">fashion</a></li>
                            <li><a style="color:black" href="#">electronics</a></li>
                            <li><a style="color:black" href="#">toys</a></li>
                            <li><a style="color:black" href="#">food</a></li>
                            <li><a style="color:black" href="#">jewellery</a></li>
                        </ul>
                    </div>
                    <div class="product-share">
                        <ul>
                            <li style="color:black" class="categories-title">Share :</li>
                            <li>
                                <a href="#">
                                    <i style="color:black" class="icofont icofont-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i style="color:black" class="icofont icofont-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i style="color:black" class="icofont icofont-social-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i style="color:black" class="icofont icofont-social-flikr"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      
          <div class="form-group" style="margin-top: 20px;">

          <h6>Product Review</h6>
      
      </div>
      @if($reviews->product_id  == 'id')
      
         
         
          <div class="form-group">
          <ul class="list-unstyled">
  <li class="media" style="margin-bottom: 4px;">
    <img style="height: 40px; width: 40px; border-radius: 50%; border: solid #EAECEE 1px;" class="mr-3" src="{{asset('backend/img/boy.png')}}" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1">By <span class="text-success">{{$reviews->name}}</span><small style="color:grey; font-size: 11px;"> {{$reviews->created_at}}</small></h5>
      {{$reviews->description}}
    </div>
  </li>
  
</ul>
</div>  
@else
<p>No Review</p>

         
         @endif
    </div>
</div>


@endsection
