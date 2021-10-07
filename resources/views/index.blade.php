@extends('layouts.app')

@section('content')
	<div class="post_content">
		<section class="grey_section section_padding_top_30 section_padding_bottom_50">
			<div class="container">
				<div class="sc_section">
					<div class="sc_section_content">
						<div class="sc_content sc_align_center">
							<div class="columns_wrap sc_columns sc_columns_count_3">
								<div class="column-1_3">
									<figure class="sc_image sc_image_shape_square">
										<img src="images/227x227.png" alt="" />
									</figure>
									<h5 class="sc_title sc_title_style_2">
									<a href="#">CONSULT WITH AN EXPERT</a>
									</h5>
									<div class="sc_section sc_section_style_1">We&#8217;ll match you with an authority on your destination from our team of widely published writers who travel the globe.</div>
								</div>
								<div class="column-1_3">
									<figure class="sc_image  sc_image_shape_square">
										<img src="images/227x227.png" alt="" />
									</figure>
									<h5 class="sc_title sc_title_style_2">
									<a href="#">GET A CUSTOMIZED PLAN</a>
									</h5>
									<div class="sc_section sc_section_style_1">Our expert will map out your entire trip, with insider recommendations about where to go, what to do, how to get around and where to stay.</div>
								</div>
								<div class="column-1_3">
									<figure class="sc_image  sc_image_shape_square">
										<img src="images/227x227.png" alt="" />
									</figure>
									<h5 class="sc_title sc_title_style_2">
									<a href="#">BOOK YOUR TRIP</a>
									</h5>
									<div class="sc_section sc_section_style_1">Finally, our in-house specialists will seamlessly help you book the hotels or activities on your itinerary at the best available rates.</div>
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
