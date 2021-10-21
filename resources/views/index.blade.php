@extends('layouts.app')

@section('content')
    @include('layouts.slider')
	<div class="post_content">
		<section class="grey_section section_padding_top_30 section_padding_bottom_50">
			<div class="container">
				<div class="sc_section" style="margin: 50px auto;">
					<div class="sc_section_content">
						<div class="sc_content sc_align_center">
							<div class="columns_wrap sc_columns sc_columns_count_3">
								<div class="column-1_4">
									<figure class="sc_image sc_image_shape_square">
										<img src="{{asset('assets/images/icons/paper-plane.png')}}" alt="" />
									</figure>
									<h5 class="sc_title sc_title_style_2" style="text-transform: uppercase">
										<a href="#">Flight Services</a>
									</h5>
									<div class="sc_section sc_section_style_1">
										Get your best flight services around the world in just one place. To make your flight more comfortable, 
										choose Top Trip as your best flight solution partner for international airlines and domestic flights under cost-efficient budget plans.
									</div>
								</div>
								<div class="column-1_4">
									<figure class="sc_image  sc_image_shape_square">
										<img src="{{asset('assets/images/icons/review.png')}}" alt="" />
									</figure>
									<h5 class="sc_title sc_title_style_2" style="text-transform: uppercase">
									<a href="#">Hotel Services</a>
									</h5>
									<div class="sc_section sc_section_style_1">
										We offer quality hotel services that are safe, reliable, and based on customer expectations. 
										Make your tour more delightful and get the best hotel experience by exploring the best lodging services with Top trip.
									</div>
								</div>
								<div class="column-1_4">
									<figure class="sc_image  sc_image_shape_square">
										<img src="{{asset('assets/images/icons/holiday.png')}}" alt="" />
									</figure>
									<h5 class="sc_title sc_title_style_2" style="text-transform: uppercase">
									<a href="#">Holiday Packages</a>
									</h5>
									<div class="sc_section sc_section_style_1">
										Experience your finest holiday tours with our best travel packages. 
										We serve exclusive holiday deals and tour services based on the customer's requests. Also, we give tour facilities under conditions.
									</div>
								</div>
								<div class="column-1_4">
									<figure class="sc_image  sc_image_shape_square">
										<img src="{{asset('assets/images/icons/passport.png')}}" alt="" />
									</figure>
									<h5 class="sc_title sc_title_style_2" style="text-transform: uppercase">
									<a href="#">Visa Support</a>
									</h5>
									<div class="sc_section sc_section_style_1">
										We support tourist Visa, and we help to meet the best deal on worldwide visa supports.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="wrapper">
				<div class="sc_section">
					<div class="sc_section_content">
						<div class="sc_content">
							<div class="columns_wrap sc_columns sc_columns_count_4 m-0">
								<div class="column-1_4 p-0">
									<div class="service">
										<img src="{{asset('assets/images/services/1.jpg')}}" alt="" srcset="">
										<div class="service-info-top">
											<div class="price-info">
												<span>Start Per Night</span>
												$110
											</div>
											<p class="service-info-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias nulla reprehenderit fugiat tempore nihil voluptatibus asperiores eos dignissimos veniam mollitia?</p>
										</div>
										<div class="service-info-btm">
											<h4 class="title">
												<span>United arab emirates</span> Dubai
											</h4>
											<a href="" class="service-btn">Details</a>
										</div>
									</div>
								</div>
								<div class="column-1_4 p-0">
									<div class="service">
										<img src="{{asset('assets/images/services/2.jpg')}}" alt="" srcset="">
										<div class="service-info-top">
											<div class="price-info">
												<span>Start Per Night</span>
												$110
											</div>
											<p class="service-info-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias nulla reprehenderit fugiat tempore nihil voluptatibus asperiores eos dignissimos veniam mollitia?</p>
										</div>
										<div class="service-info-btm">
											<h4 class="title">
												<span>United Kingdom</span> London
											</h4>
											<a href="" class="service-btn">Details</a>
										</div>
									</div>
								</div>
								<div class="column-1_4 p-0">
									<div class="service">
										<img src="{{asset('assets/images/services/3.jpg')}}" alt="" srcset="">
										<div class="service-info-top">
											<div class="price-info">
												<span>Start Per Night</span>
												$110
											</div>
											<p class="service-info-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias nulla reprehenderit fugiat tempore nihil voluptatibus asperiores eos dignissimos veniam mollitia?</p>
										</div>
										<div class="service-info-btm">
											<h4 class="title">
												<span>AUSTRALIA ANS OCEANIA</span> Sydney
											</h4>
											<a href="" class="service-btn">Details</a>
										</div>
									</div>
								</div>
								<div class="column-1_4 p-0">
									<div class="service">
										<img src="{{asset('assets/images/services/4.jpg')}}" alt="" srcset="">
										<div class="service-info-top">
											<div class="price-info">
												<span>Start Per Night</span>
												$110
											</div>
											<p class="service-info-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias nulla reprehenderit fugiat tempore nihil voluptatibus asperiores eos dignissimos veniam mollitia?</p>
										</div>
										<div class="service-info-btm">
											<h4 class="title">
												<span>Brazil</span> Rio de jeneiro
											</h4>
											<a href="" class="service-btn">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="columns_wrap sc_columns sc_columns_count_4 m-0">
								<div class="column-1_4 p-0">
									<div class="service">
										<img src="{{asset('assets/images/services/5.jpg')}}" alt="" srcset="">
										<div class="service-info-top">
											<div class="price-info">
												<span>Start Per Night</span>
												$110
											</div>
											<p class="service-info-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias nulla reprehenderit fugiat tempore nihil voluptatibus asperiores eos dignissimos veniam mollitia?</p>
										</div>
										<div class="service-info-btm">
											<h4 class="title">
												<span>Maldives</span> Male
											</h4>
											<a href="" class="service-btn">Details</a>
										</div>
									</div>
								</div>
								<div class="column-1_4 p-0">
									<div class="service">
										<img src="{{asset('assets/images/services/6.jpg')}}" alt="" srcset="">
										<div class="service-info-top">
											<div class="price-info">
												<span>Start Per Night</span>
												$110
											</div>
											<p class="service-info-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias nulla reprehenderit fugiat tempore nihil voluptatibus asperiores eos dignissimos veniam mollitia?</p>
										</div>
										<div class="service-info-btm">
											<h4 class="title">
												<span>Turkey</span> Istanbul
											</h4>
											<a href="" class="service-btn">Details</a>
										</div>
									</div>
								</div>
								<div class="column-1_4 p-0">
									<div class="service">
										<img src="{{asset('assets/images/services/7.jpg')}}" alt="" srcset="">
										<div class="service-info-top">
											<div class="price-info">
												<span>Start Per Night</span>
												$110
											</div>
											<p class="service-info-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias nulla reprehenderit fugiat tempore nihil voluptatibus asperiores eos dignissimos veniam mollitia?</p>
										</div>
										<div class="service-info-btm">
											<h4 class="title">
												<span>Austria</span> Vienna
											</h4>
											<a href="" class="service-btn">Details</a>
										</div>
									</div>
								</div>
								<div class="column-1_4 p-0">
									<div class="service">
										<img src="{{asset('assets/images/services/8.jpg')}}" alt="" srcset="">
										<div class="service-info-top">
											<div class="price-info">
												<span>Start Per Night</span>
												$110
											</div>
											<p class="service-info-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias nulla reprehenderit fugiat tempore nihil voluptatibus asperiores eos dignissimos veniam mollitia?</p>
										</div>
										<div class="service-info-btm">
											<h4 class="title">
												<span>Italy</span> Venice
											</h4>
											<a href="" class="service-btn">Details</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="section_padding_50">
			<div class="container">
				<div class="sc_section">
					<div class="sc_content sc_align_center">
						<h2 class="sc_title sc_title_style_1 sc_title_iconed">
						<span class="sc_title_icon sc_title_icon_top  sc_title_icon_small">
							<img src="images/top_title_bg.png" alt="" />
						</span>On Sale Today</h2>
						<h5 class="sc_undertitle sc_undertitle_style_1">SOUTH AFRICA, MARYLAND, ITALY &amp; MORE</h5>
					</div>
				</div>
			</div>
		</section>
		
		<section class="image_bg image_bg_4 sc_oblique oblique_left">
			<div class="container">
				<div class="sc_section">
					<div class="content_wrap">
						<div class="sc_oblique_wrap">
							<h4 class="sc_title">FOUR SEASONS HOTEL</h4>
							<h3 class="sc_title">ALEXANDRIA</h3>
							<div class="description">ST. GEORGE&#039;S, GRENADA</div>
							<div class="info">
								<span class="info_time"></span>
								Sale Ends: August 16, 2015<br />
								6 days 17 hours left!
							</div>
							<a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_custom sc_button_size_large alignleft">visit sale</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="image_bg image_bg_5 sc_oblique oblique_right">
			<div class="container">
				<div class="sc_section">
					<div class="content_wrap">
						<div class="sc_oblique_wrap">
							<a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_custom sc_button_size_large alignleft">visit sale</a>
							<div class="info">
								<span class="info_time"></span>
								Sale Ends: August 16, 2015<br />
								6 days 17 hours left!
							</div>
							<div class="description">UNITED ARAB EMIRATES</div>
							<h3 class="sc_title">ABU DHABI</h3>
							<h4 class="sc_title">QASR AL SARAB DESERT</h4>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="image_bg image_bg_6 sc_oblique oblique_left">
			<div class="container">
				<div class="sc_section">
					<div class="content_wrap">
						<div class="sc_oblique_wrap">
							<h4 class="sc_title">SECRET</h4>
							<h3 class="sc_title">BAY</h3>
							<div class="description">DOMINICA, WEST INDIES</div>
							<div class="info">
								<span class="info_time"></span>
								Sale Ends: August 16, 2015<br />
								6 days 17 hours left!
							</div>
							<a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_custom sc_button_size_large alignleft">visit sale</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section_padding_50">
			<div class="container">
				<div class="sc_section" style="margin: 50px auto;">
					<div class="sc_content">
						<h2 class="sc_title sc_title_style_1 sc_title_iconed sc_align_center">
							Recent Posts
						</h2>

						<div class="margin_bottom_50"></div>

						<div class="woocommerce columns-3">
							<ul class="products">
								<li class="first product">
									<a href="#">
										<img src="{{asset('assets/images/564x370.png')}}" class="attachment-shop_catalog" alt="Calm Bled lake at sunrise">
										<h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, architecto.</h4>
									</a>
								</li>
								<li class="product">
									<a href="#">
										<img src="{{asset('assets/images/564x370.png')}}" class="attachment-shop_catalog" alt="Sunset over Manhattan from Top of the Rock">
										<h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, architecto.</h4>
									</a>
								</li>
								<li class="last product">
									<a href="#">
										<img src="{{asset('assets/images/564x370.png')}}" class="attachment-shop_catalog" alt="bigstock-gold-temple-japan-44883001">
										<h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, architecto.</h4>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="grey_section section_padding_50">
			<div class="container">
				<div class="sc_section aligncenter">
					<div class="sc_section_content">
						<div class="sc_content">
							<div class="sc_section aligncenter">
								<h2 class="sc_title margin_top_0">FREE THIS WEEKEND?</h2>
								<h5 class="sc_undertitle sc_undertitle_style_1">EXCLUSIVE DEALS ON YOUR FAVORITE HOTELS AROUND THE WORLD</h5>
							</div>
							<div class="sc_section margin_top_30">
								<div id="sc_section_1_scroll" class="sc_scroll sc_scroll_style_1 sc_scroll_horizontal swiper-slider-container scroll-container">
									<div class="sc_scroll_wrapper swiper-wrapper">
										<div class="sc_scroll_slide swiper-slide">
											<div class="sc_image_wrap  alignleft">
												<figure class="sc_image  sc_image_shape_round">
													<img src="{{asset('assets/images/weekend_1-90x90.jpg')}}" alt="" />
												</figure>
												<div class="figcaption">
													<span></span>
													<a href="#">Australia</a>
												</div>
											</div>
											<div class="sc_image_wrap  alignleft">
												<figure class="sc_image  sc_image_shape_round">
													<img src="{{asset('assets/images/weekend_2-90x90.jpg')}}" alt="" />
												</figure>
												<div class="figcaption">
													<span></span>
													<a href="#">London</a>
												</div>
											</div>
											<div class="sc_image_wrap  alignleft">
												<figure class="sc_image  sc_image_shape_round">
													<img src="{{asset('assets/images/weekend_3-90x90.jpg')}}" alt="" />
												</figure>
												<div class="figcaption">
													<span></span>
													<a href="#">New York</a>
												</div>
											</div>
											<div class="sc_image_wrap  alignleft">
												<figure class="sc_image  sc_image_shape_round">
													<img src="{{asset('assets/images/weekend_4-90x90.jpg')}}" alt="" />
												</figure>
												<div class="figcaption">
													<span></span>
													<a href="#">Copenhagen</a>
												</div>
											</div>
											<div class="sc_image_wrap  alignleft">
												<figure class="sc_image  sc_image_shape_round">
													<img src="{{asset('assets/images/weekend_5-90x90.jpg')}}" alt="" />
												</figure>
												<div class="figcaption">
													<span></span>
													<a href="#">Amsterdam</a>
												</div>
											</div>
											<div class="sc_image_wrap  alignleft">
												<figure class="sc_image  sc_image_shape_round">
													<img src="{{asset('assets/images/weekend_6-90x90.jpg')}}" alt="" />
												</figure>
												<div class="figcaption">
													<span></span>
													<a href="#">Paris</a>
												</div>
											</div>
											<div class="sc_image_wrap  alignleft">
												<figure class="sc_image  sc_image_shape_round">
													<img src="{{asset('assets/images/weekend_7-90x90.jpg')}}" alt="" />
												</figure>
												<div class="figcaption">
													<span></span>
													<a href="#">Los Angeles</a>
												</div>
											</div>
											<div class="sc_image_wrap  alignleft">
												<figure class="sc_image  sc_image_shape_round">
													<img src="{{asset('assets/images/weekend_8-90x90.jpg')}}" alt="" />
												</figure>
												<div class="figcaption">
													<span></span>
													<a href="#">Barcelona</a>
												</div>
											</div>
											<div class="sc_image_wrap  alignleft">
												<figure class="sc_image  sc_image_shape_round">
													<img src="{{asset('assets/images/weekend_9-90x90.jpg')}}" alt="" />
												</figure>
												<div class="figcaption">
													<span></span>
													<a href="#">Stockholm</a>
												</div>
											</div>
										</div>
									</div>
									<div id="sc_section_1_scroll_bar" class="sc_scroll_bar sc_scroll_bar_horizontal sc_section_1_scroll_bar">
									</div>
								</div>
							</div>
							<a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_custom sc_button_size_large margin_top_40">join us!</a>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
@endsection
