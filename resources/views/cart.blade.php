


@extends('layouts.front-app')


@section('content')
<div>
    {{-- In work, do what you enjoy. --}}

    <div class="cart-main-area pt-95 pb-100">
        <div class="container">
           
           @if(!empty($cart))
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="cart-heading">Cart</h1>
                    <div class="table-content table-responsive">
                        <table style="box-shadow: 0px 3px 5px 0px grey; border-radius: 5px;">
                            <thead class="bg bg-warning">
                                <tr>
                                    <th style="color:black">remove</th>
                                    <th style="color:black">images</th>
                                    <th style="color:black">Product</th>
                                    <th style="color:black">Price</th>
                                    <th style="color:black">Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                            		<td><a  href=""><i
                                                class="pe-7s-close text-warning" style="font-size: 50px; font-weight: bold;"></i></a></td>
                                                <td><img height="50px" src="" alt="image"></td>
                                                <td>{{$cart->pro_name}}</td>
                                                <td>{{$cart->product_price}}</td>
                                                <td>{{$cart->pro_quantity}}</td>

                            		
                            	</tr>
                            </tbody>


                               
                        </table>
                    </div>
                    {{-- <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="coupon-all">
                                <div class="coupon">
                                    <form action="" method='get'>
                                        <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                            placeholder="Coupon code" type="text" required>
                                        <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div> --}}
                  
                </div>
            </div>
            @else:
            <div class="row" style="background-color: black; color:white; height: 50px; border-radius: 5px; padding: 10px;">
                <div class="col-lg-4"></div>
             <h4 style="color:white">Cart Page is Empty</h4> 

        </div>
        @endif
    </div>



</div>

<style>
    tr th{
        color:black;
    }
</style>





@endsection
