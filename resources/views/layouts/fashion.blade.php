<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--============ CSRF Token ================-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- ========= BOOTSTRAP -FONTWAESOME - AOS =========== -->
	<link rel="stylesheet" href={{ URL::asset('css/bootstrap4.6.css') }}>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
	<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" >

	<!-- ============== css personal =============-->
	<link rel="stylesheet" href={{ URL::asset('css/effect_menu_reponsive.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/product.css') }}>
	<link rel="stylesheet" href={{ URL::asset('css/header.css') }}>
	<link rel="stylesheet" href={{ URL::asset('css/footer.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/banner.css') }}>

</head>
<body>
	<div class="container-I">
		<!-- ============= LOGO & NAV ============  -->
			<!-- LOGO -->
		<header>
		   <div class="logo">
			<div class="logo-block-1" data-aos="fade-up-right"  data-aos-duration="900">
			   <a class="logo-link" href="{{ route('sophia.home') }}">
			      <img src={{ URL::asset('img/icon2.png') }} alt="">
				<span>
				   <b>S</b><span>ophia</span>
				   <p>Fashions fade, style is eternal</p>
				</span>
			   </a>
			</div>
			<div id=seach-block-3 data-aos="fade-up-left"  data-aos-duration="900">
				<form action="" id="seach-box">
					<input type="text" id="seach-text" placeholder="Search your items and brands">
					<button id="seach-btn"><i class="fa-solid fa-magnifying-glass i_1"></i></button>
				</form>
			</div>

			<div class="logo-block-2" data-aos="fade-up-right"  data-aos-duration="900">
				<a href="" id="logo_right_icon"><i class="fa-solid fa-magnifying-glass"></i></a>
				<a href="{{ route('sophia.account') }}"><i class="fa-solid fa-user i_2"></i></a>
				<a href=""><i class="fa-solid fa-cart-shopping i_3"></i></a>
			</div>

		   </div>
		   	<!-- NAVBAR -->
		   <div class="nav" data-aos="fade-down-right" data-aos-easing="linear">
			<a class="node">
				<i class="fa-solid fa-bars"></i>
			</a>
			<ul>
			   <li><a href="{{ route('sophia.home') }}">Home</a></li>
			   <li>
				<div class="sub-nav">
				   <a class="t1" href="{{ route('sophia.womenPage') }}">Women's</a>
				   <div class="t2">
					<ul>
					  <li><a href="{{ route('sophia.womenPage') }}">All Clothing</a></li>
					  <li><a href="{{ route('sophia.womenPage') }}">Dresses</a></li>
					  <li><a href="{{ route('sophia.womenPage') }}">Skirts</a></li>
					  <li><a href="{{ route('sophia.womenPage') }}">Jeans</a></li>
					  <li><a href="{{ route('sophia.womenPage') }}">Shirts & Blouses</a></li>
					</ul>
				   </div>
				</div>
			   </li>
			   <li>
				<div class="sub-nav">
				   <a class="t1" href="{{ route('sophia.manPage') }}">Man's</a>
				   <div class="t2">
					<ul id="man-s">
					  <li><a href="{{ route('sophia.manPage') }}">All Clothing</a></li>
					  <li><a href="{{ route('sophia.manPage') }}">Jackets & Coats</a></li>
					  <li><a href="{{ route('sophia.manPage') }}">Jeans</a></li>
					  <li><a href="{{ route('sophia.manPage') }}">Shirts</a></li>
					  <li><a href="{{ route('sophia.manPage') }}">Suits</a></li>
					</ul>
				   </div>
				</div>
			   </li>

			   <li><a href="{{ route('sophia.accessoriesPage') }}">Accessories</a></li>
			   <li><a href="{{ route('sophia.aboutPage') }}">About us</a></li>
			</ul>
		   </div>

		   <!-- ========== EFFECT MENU WHEN RESPONSIVE ========= -->
		   <div class="menu-effect">

			<div class="menu-content">
				<div><img class="icon-x" src={{ URL::asset('img/h6.png') }} alt=""></div>
				<h1>Sophia</h1>
				<ul>
				   <li><a href="{{ route('sophia.home') }}">Home</a></li>
				   <li>
					<a href="women.html">Women's</a>
					<ul class="effect_submenu">
					   <li><a href="{{ route('sophia.womenPage') }}">All Clothing</a></li>
					   <li><a href="{{ route('sophia.womenPage') }}">Dresses</a></li>
					   <li><a href="{{ route('sophia.womenPage') }}">Skirts</a></li>
					   <li><a href="{{ route('sophia.womenPage') }}">Jeans</a></li>
					   <li><a href="{{ route('sophia.womenPage') }}">Shirts & Blouses</a></li>
					</ul>
				   </li>
				   <li>
					<a href="man.html">Man</a>
					<ul class="effect_submenu">
					   <li><a href="{{ route('sophia.manPage') }}">All Clothing</a></li>
					   <li><a href="{{ route('sophia.manPage') }}">Jackets & Coats</a></li>
					   <li><a href="{{ route('sophia.manPage') }}">Jeans</a></li>
					   <li><a href="{{ route('sophia.manPage') }}">Shirts</a></li>
					   <li><a href="{{ route('sophia.manPage') }}">Suits</a></li>
					</ul>
				   </li>
				   <li><a href="{{ route('sophia.accessoriesPage') }}">Accessories</a></li>
				   <li><a href="{{ route('sophia.aboutPage') }}">About us</a></li>
				</ul>
			</div>
			<div class="menu-bg"></div>
		</div>
		</header>

	<main>
		@yield('content')
	</main>

	<footer>
		<div class="footer-link">
			<div class="footer-link-logo" data-aos="zoom-in" data-aos-duration="900">
				<a href="">
					<img src={{ URL::asset('img/icon2.png') }} alt="">
					<span id="footer_text1">S</span><span id="footer_text2">ophia</span>
				</a>

				</b>
			 </div>
			<div class="footer-link-icon" data-aos="zoom-in-up" data-aos-duration="900">
				<ul class="icon">
					<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa-solid fa-address-card"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
				</ul>
			</div>
			<div class="footer-link-pages" data-aos="zoom-in-down" data-aos-duration="900">
				<ul>
					<li><a href="{{ route('sophia.home') }}">Home</a></li>
					<li><a href="{{ route('sophia.womenPage') }}">Women's</a></li>
					<li><a href="{{ route('sophia.manPage') }}">Man's</a></li>
					<li><a href="{{ route('sophia.accessoriesPage') }}">Accessories</a></li>
					<li><a href="{{ route('sophia.aboutPage') }}">About us</a></li>
				</ul>
			</div>
		</div>
		<div class="contact" data-aos="zoom-in-left" data-aos-duration="1000">
			<h2>Contact us</h2>
			<p>Email: sophia123@ctu.vn</p>
			<p>Phone number: 1900737434</p>
			<p>Address: 3/2, Hưng Lợi, Ninh Kiều, Cần Thơ</p>
		</div>
		<div><span id="email-span">Email <input type="email" name="email" id="email" placeholder="Enter your email"></span></div>
		<div class="footer-all_right">
			<p>
			   <i class="fa-regular fa-copyright"></i>
			   2022 Sophia Fashion | All rights reversed
			</p>


		</div>
	</footer>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/effect_menu_responsive.js"></script>

	<script>
		AOS.init();
	</script>
</body>

</html>
