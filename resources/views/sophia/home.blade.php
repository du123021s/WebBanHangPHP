@extends('layouts.fashion')


@section('content')
<link rel="stylesheet" href={{ URL::asset('css/index.css') }}>
	<!--============ 1.BANNER ==============-->
	<div class="block-1" data-aos="fade-right" data-aos-duration="3000">
		<div id="cs" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
				<!-- ========== img 1 ========== -->
			<div class="carousel-item active">
			   <img class="d-block w-100" src={{ URL::asset('img/banner20.jpg') }} alt="First slide">
			   <div class="cs-caption1 d-none d-md-block"><!-- text 1 -->
				<h1>Man's</h1>
				<div class="cs-text">
				    <p class="text">Fashion heaven.</p>
				    <p>Various models - quality - new. Great choice for you.</p>
				    <button class="btn btn-primary text-button1">Visit the store now!</button>
				</div>
			   </div>
			</div>
				  <!-- ======== img 2 ======== -->
			<div class="carousel-item">
				<img class="d-block w-100" src={{ URL::asset('img/banner21.jpg') }} alt="Second slide">
						  <!-- text 2 -->
				<div class="cs-caption2 d-none d-md-block">
				   <h1>Women's</h1>
				   <div class="cs-text_">
					<p class="text_">Diverse models, amazing deals. Great choice for you.</p>
					<button class="btn btn-primary">Go now!</button>
				   </div>
				</div>
			</div>

				  <!-- ========= img 3 =========== -->
			<div class="carousel-item">
				    <img class="d-block w-100" src={{ URL::asset('img/banner16.jpg') }} alt="Third slide">
						<!-- text 3 -->
				<div class="cs-caption2 d-none d-md-block">
				   <h1>Accesories</h1>
				   <div class="cs-text_">
					    <p class="text_">Diverse models, amazing deals. Great choice for you.</p>
					    <button class="btn btn-primary">Go now!</button>
				   </div>
				</div>
			</div>
				  <!-- ========== img 4 =========== -->
			<div class="carousel-item">
				<img class="d-block w-100" src={{ URL::asset('img/banner15.jpg') }} alt="Third slide">
						<!-- text 4 -->
				<div class="cs-caption2 d-none d-md-block">
				   <h1>Accesories</h1>
				   <div class="cs-text_">
					<p class="text_">Diverse models, amazing deals. Great choice for you.</p>
					<button class="btn btn-primary">Go now!</button>
				   </div>
				</div>
			</div>
				  <!-- ============== button: prev, next =========== -->
			<a class="carousel-control-prev" href="#cs" role="button" data-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#cs" role="button" data-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>
		</div>

	<!--================ 2.INTRO PRODUCT ===============-->
	<div class="block-2 intro_product" id="intro" >
		<div class="intro-1 intro" data-aos="fade-right" data-aos-duration="500">
			<img src={{ URL::asset('img/intro2.jpg') }} alt="">
			<div class="intro-text">
			   <h3>HAND BAGS</h3>
			   <a href="">
				<p class="p1">GET UP TO</p>
				<p class="p2">20% OFF</p>
			  </a>
			</div>
		</div>
		<div class="intro-1 intro" data-aos="flip-left" data-aos-duration="500">
			<img src={{ URL::asset('img/intro5.jpg') }} alt="">
			<div class="intro-text intro_other">
				<h3 style="text-align:left">NEW COLLECTION</h3>
				<p>OF FASHION CLOTHES</p>
				<button class="btn btn-outline-danger b1">SHOP NOW!</button>
			</div>
		</div>
		<div class="intro-1 intro" data-aos="fade-left" data-aos-duration="500">
			<img src={{ URL::asset('img/intro4.jpg') }} alt="">
			<div class="intro-text intro_other">
				<h3>15% OFF</h3>
				<p style="color:white">on brand new model</p>
				<button class="btn btn-danger b2">SHOP NOW!</button>
			</div>
		</div>
	</div>

    <!--=============== 3.PRODUCT ================-->

	<div class="block-3">
		<div class="block-3-text" data-aos="fade-up-left" data-aos-duration="1200">
			<h2>Featured Product</h2>
			<div id="hr1"><hr></div>
		</div>

		<div class="item" >
            @php
                $count = 0;
            @endphp
            @foreach ($products as $product)
                @if ($count < 6)
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

                    @php
                        $count++;
                    @endphp
                @endif

            @endforeach
        </div>
        {{--  {{ $products->links() }}  --}}


    </div>
	<!--================= 4.ACCESSORIES ==============-->
	<hr>
	<div class="block-4" data-aos="zoom-out-right" data-aos-duration="800">
		<div class="block-4-pk">
			<img src={{ URL::asset('img/h23.jpg') }} alt="">
			<div class="block-4-text">
				<h1>BUY 2 ITEMS</h1>
				<p>GET ONE FOR FREE!</p>
				<button class="btn btn-danger"><a href="{{ route('sophia.accessoriesPage') }}">SHOP NOW!</a></button>
			</div>
		</div>
	</div>
	<hr>
	<!--================ 5. NEW PRODUCT ================-->
	<div class="block-5 new" >
		<div class="new-title" data-aos="fade-down-left" data-aos-duration="1200">
			<h2>New Product</h2>
			<div id="hr2"><hr></div>
		</div>

		<div class="item" >
            @php
                $temp=0;
            @endphp
            @foreach ($products as $product)
                @if ($product->catalogId === 'CA01' && $temp<6)
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
                    @php
                        $temp++;
                    @endphp
                @endif

            @endforeach
        </div>
        {{--  {{ $products->links() }}  --}}

	</div>
	<!--6 ABOUT US  -->
	<hr>
	<div class="block-6 about"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="700">
		<div class="about-img">
			<img src={{ URL::asset('img/h48.jpg') }} alt="">
		</div>
		<div class="about-content">
			<h1>ABOUT US</h1>
			<div id="hr3"><hr></div>
			<p id="about_p1"><span>S</span>ophia is an online fashion shop specializing
				in providing quality fashion products for both men and women.
				We are proud to be the cooperation unit of many big brands...</p>
			<button class="btn btn-info"><a href="about_us.html">Learn about us</a> </button>
		</div>
	</div><hr>

@endsection
