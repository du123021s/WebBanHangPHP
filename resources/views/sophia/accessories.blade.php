@extends('layouts.fashion')

@section('content')
<link rel="stylesheet" href="css/accessories.css">
			<!--============== BANNER =============-->
			<div class="block-1">
				<div class="banner"  data-aos="fade-down" data-aos-duration="700">
                              <img src="../img/tx25.jpg" alt="">
                              <div class="m-banner-text">
                                    <h1>Fashion Accessories</h1>
                                    <p>New arrivals autumn winter fashion 2022</p>
                                    <button class="btn btn-primary">SHOP NOW!</button>
                              </div>
                        </div>
			</div>

			<!--============== PRODUCT =========== -->
			<div class="block-2">
				<div class="block-2-text">
					<h2>NEW PRODUCT</h2>
					<div id="hr1"><hr></div>
				</div>

				<div class="item">
                    @foreach ($products as $product)
                        @if ($product->catalogId === $catalog_Id)
                            <div class="clothes" data-aos="fade-up-right" data-aos-duration="700">
                                <a href="{{ route('product.show', $product->id) }}">
                                    <img class="clothes-img1" src="{{ asset('storage/'.$product->image1) }}" alt="">
                                    <img class="clothes-img2" src="{{ asset('storage/'.$product->image2) }}" alt="">
                                </a>

                                <div class="clothes-text1">
                                    <div class="left_text">{{ $product->name }}</div>
                                    <div class="right_text">${{ number_format($product->price, 2) }}</div>
                                </div>
                                <div class="clothes-text2">{{ $product->description }}</div>
                                <form action="{{ route('cart.add', $product->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="product" value="{{ $product->id }}">
                                    <div class="clothes-text3">
                                        <button class="btn btn-info">Add to cart <span class="fa fa-shopping-cart"></span></button>
                                    </div>
                                </form>
                            </div>
                        @endif
                    @endforeach
                </div>


			</div>

@endsection
