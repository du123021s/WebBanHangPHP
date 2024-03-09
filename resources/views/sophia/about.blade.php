@extends('layouts.fashion')

@section('content')
<link rel="stylesheet" href={{ URL::asset('css/about_us.css') }}>
			<!--============ 1.BANNER ==============-->
			<div class="block-1">
				<div class="container-fluid" id="about_banner1">
				   <div class="row" style="height:450px ;">
					    <!-- Card -->
					<div class="col-md-5" id="ani">
					<h1 class="title_about_us"><p>ABOUT US</p></h1>
					<div id="hr1"><hr ></div>
					   <p class="title_about_us_sub">Sophia is
							an online fashion store specializing in quality fashion products
							for both men and women.</p><br>
					   <blockquote style="margin-right: 50px">&quot; If you can’t be better than your competition, just dress better”- Anna Wintour &quot;</blockquote>
					   <a href="#sec_1" class="btn btn-primary" id="button_1">Find out now</a>
					</div>
			     		    <!-- <div class="col-md-7"></div> -->
				   </div>
				</div>

			</div>

			<!-- Content -->

                  <!-- Introduction -->
                  <div class="container block-2" id="sec_1" data-aos="flip-left" data-aos-duration="1200">
                        <div class="row block-2_pra">
                            <div class="col-md-5 block-2_text">
                                <h1 class="big_title"><p>SOPHIA FASHION</p></h1>
                                <hr>
                                <h5><i>“Fashion is what you adopt when you don’t know who you are”- Quentin Crisp</i></h5>
                                <div id="hr2"><hr></div>
                                <h4 class="small_title">Putting on a beautifully designed suit elevates my spirit, extols my sense of self, and helps define me as a man to whom details matter- Gay Talese</h4><br>
                                <div class="txt_content">
                                    <p>Sophia Fashion was established in 2015 as a place specializing in providing fashion clothes, accessories that are meticulously designed and processed. We are proud to be one of the reliable partners of many famous brands. As a place to distribute quality products to consumers with the principle "Customer is God".</p>
                                    <p>Let us give you the best shopping experience.</p>
                                </div>
                            </div>

                            <div class="col-md-2"></div>
                            <div class="col-md-5" id="img_right"><img src={{ URL::asset('img/h49.jpg') }} alt=""></div>
                        </div>
            	</div>

            <!-- Mission -->
            <div class="container block-3" data-aos="flip-right" data-aos-duration="1000">
                  <div class="row">
                        <div class="mission">
                              <h1 class="big_title"><p>MISSION</p></h1>
                              <div id="hr3"><hr></div>
                              <h4 class="small_title">“Dressing well is a form of good manners”- Tom Ford</h4><br><br>
                        </div>

                        <div class="col-sm-12">

                              <div class="card mb-3" style="max-width: 100%;">
                              <div class="row g-0">
                                    <div class="col-md-4">
                                          <img src={{ URL::asset('img/h53.jpg') }} class="img-fluid rounded-start" alt="..." style="width: 100%; max-height: 100%;">
                                    </div>
                                    <div class="col-md-8 misson_text">
                                       <div class="card-body">
                                           <h5 class="card-title"></h5>
                                          <div class="card-text txt_content">
                                                <p>Today, when the internet is growing more and more. Selling over the internet is more popular and faster than ever.
                                                Therefore, it also creates conditions for many bad products to enter the market. We hope that we will be a reliable shopping link for consumers. </p>
                                                <p>A place where they can trust, shop with confidence, experience the best fashion possible!</p>
                                          </div>
                                       </div>
                                    </div>
                              </div>
                              </div>

                        </div>
                  </div>
            </div>

            <!-- Vision -->
            <div class="container-fluid block-4" id="background-img" >
                  <div class="row">
                        <div class="col-md-6" id="col_img_vision">
                        <div class="vision" >
                              <h1 class="big_title"><b>VISION</b></h1>
                              <div id="hr4"><hr></div>
                              <h4 class="small_title">&quot;Remind yourself. Nobody built like you, you design yourself.&quot;
                              <div align="right">- Jay Z -</div>
                              </h4><br>

                              <div class="txt_content" >
                                    <div>In 2022, Sophia wishes to become a reliable shopping bridge for customers to access the best fashion products.</div>
                                    <div>
                                          In 2023, Sophia will provide many quality products at the best possible prices so that many customers have the opportunity to access beautiful - quality - cheap products.
                                    </div>
                                    <div>In 2024, Sophia will be the largest online shopping site in Southeast Asia providing more wonderful shopping experiences for customers.
                                          Beautifying yourself is how you make your life more special and lively.</div>
                              </div>
                        </div>
                        </div>
                  </div>
            </div>

@endsection
