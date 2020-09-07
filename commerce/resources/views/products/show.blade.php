@extends('layouts.app')

@section('content')

	<div class="quickview_body">
        <div class="container">
            <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="quickview_pro_img">
                            <img src="{{ $product->images->image }}" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                                    	
                        <div class="quickview_pro_des">
                            <h4 class="title">{{ $product->name }}</h4>
                            <h5 class="price">{{ $product->price }} тг</h5>
                        </div>
                        <!-- Add to Cart Form -->
                        <form class="cart" method="post">
                            <div class="quantity">
                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
								<span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                            </div>
                            <button type="submit" name="addtocart" value="5" class="cart-submit">Add to cart</button>
                            <!-- Wishlist -->
                            <div class="modal_pro_wishlist">
                                <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                            </div>
                        </form>
                                        
                        <div class="share_wf mt-30">
                            <p>Share With Friend</p>
	                        <div class="_icon">
		                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		                       	<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
		                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
	                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection