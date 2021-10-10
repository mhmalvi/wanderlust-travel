@extends('layouts.app')

@section('content')
			<div class="page_top_wrap page_top_title page_top_breadcrumbs">
				<div class="breadcrumbs">
					<div class="content_wrap">
						<a class="breadcrumbs_item home" href="index.html">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">About Us</span>
					</div>
				</div>
				<div class="page_title_wrap content_wrap page_title_wrap_style_1">
					<span class="page_title_bg"></span>
					<h1 class="page_title">About Us</h1>
				</div>
			</div>

			<div class="page_content_wrap">
				<div class="content">
					<article class="post_item post_item_single page">
						<div class="post_content">

							<section class="grey_section section_padding_50">
								<div class="container">
									<div class="sc_section bg_tint_light">
										<div class="sc_section_content">
											<div class="sc_content content_wrap">
												<h2 class="sc_title margin_top_0 sc_align_center">Why choose Toptrip?</h2>
												<div class="columns_wrap sc_columns columns_nofluid margin_top_40 sc_columns_count_2">
													<div class="column-1_2 cw sc_column_item sc_column_item_1 odd first">
														<div class="sc_section sc_section_style_3">
															<span class="sc_icon sc_icon_style_1 icon-globe32 alignleft accent_color"></span>
															Plan your perfect vacation with our travel agency. Choose among hundreds of all-inclusive offers!<br />
														</div>
														<div class="sc_section sc_section_style_3">
															<span class="sc_icon sc_icon_style_1 icon-pencil124 alignleft accent_color"></span>
															We work hard to secure the best hotel rates in the most popular destinations. Search and book adventure tours now!<br />
														</div>
														<div class="sc_section sc_section_style_3">
															<span class="sc_icon sc_icon_style_1 icon-favourite24 alignleft accent_color"></span>
															Book international vacation packages with us and create memories that will last a lifetime! We will help you create your own travel history!<br />
														</div>
													</div>
													<div class="column-1_2 cw sc_column_item sc_column_item_2 even">
														<div class="sc_video_player">
															<div class="sc_video_frame" data-width="596" data-height="335">
																<iframe class="video_frame" src="https://player.vimeo.com/video/34427040" width="596" height="335" allowFullScreen="allowFullScreen">
																</iframe>
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
										<div class="sc_section_content">
											<div class="sc_content content_wrap">
												<div class="sc_testimonials style_2">
													<div class="sc_columns columns_wrap">
														<div class="column-1_2">
															<div class="sc_testimonial_item">
																<div class="sc_testimonial_content">Deals up to 60% off. To the world&#8217;s top destinations. Sound nice? We certainly think so.</div>
																<div class="sc_testimonial_avatar">
																	<img alt="team_3.jpg" src={{asset('assets/images/200x200.png')}}>
																</div>
																<div class="sc_testimonial_author">
																	<a href="#">Mike Newton</a>
																</div>
																<div class="sc_testimonial_field">on April 1, 2015 at 11:48 am</div>
															</div>
														</div>
														<div class="column-1_2">
															<div class="sc_testimonial_item">
																<div class="sc_testimonial_content">Vacationist allows you insider access to deals you simply won&#8217;t find anywhere else.</div>
																<div class="sc_testimonial_avatar">
																	<img alt="team_1.jpg" src={{asset('assets/images/200x200.png')}}>
																</div>
																<div class="sc_testimonial_author">
																	<a href="#">Sarah Jefferson</a>
																</div>
																<div class="sc_testimonial_field">on April 1, 2015 at 11:48 am</div>
															</div>
														</div>
													</div>
												</div>
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
											</div>
										</div>
									</div>
								</div>
							</section>
							
							<section class="section_padding_top_70 section_padding_bottom_30">
								<div class="container">
									<div class="sc_section">
										<div class="sc_section aligncenter">
											<h2 class="sc_title margin_top_0 margin_bottom_0">TESTIMONIALS</h2>
											<h5 class="sc_undertitle sc_undertitle_style_3 margin_bottom_0">INSPIRED BY THE BEAUTY OF LETTING GO? GO TELL YOUR FRIENDS!</h5>
										</div>
										<div class="sc_content content_wrap">
											<div class="sc_testimonials_wrap sc_section bg_tint_light">
												<div class="sc_section_overlay">
													<div class="sc_testimonials sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_nocontrols sc_slider_height_auto aligncenter" data-interval="7000">
														<div class="slides swiper-wrapper">
															<div class="swiper-slide">
																<div class="sc_testimonial_item">
																	<div class="sc_testimonial_avatar">
																		<img alt="227x227" src={{asset('assets/images/testimonials_1-200x200.webp')}}>
																	</div>
																	<div class="sc_testimonial_author">
																		<a href="#">Everyone can travel</a>
																	</div>
																	<div class="sc_testimonial_content">
																		<p>Whether you&#8217;re a globetrotter, couch surfer or stuck in a 9 to 5 job, with Let&#8217;s Travel Somewhere<br />
																		you&#8217;ll visit the greatest places on our planet.</p>
																	</div>
																</div>
															</div>
															<div class="swiper-slide">
																<div class="sc_testimonial_item">
																	<div class="sc_testimonial_avatar">
																		<img alt="227x227" src={{asset('assets/images/testimonials_2-200x200.webp')}}>
																	</div>
																	<div class="sc_testimonial_author">
																		<a href="#">LIFE'S TOO SHORT TO STAY IN BED</a>
																	</div>
																	<div class="sc_testimonial_content">
																		<p>We only have one life, one opportunity and one goal: To make the best out of it.<br />
																		So tell me, are you making the best out of it?</p>
																	</div>
																</div>
															</div>
															<div class="swiper-slide">
																<div class="sc_testimonial_item">
																	<div class="sc_testimonial_avatar">
																		<img alt="227x227" src={{asset('assets/images/testimonials_3-200x200.webp')}}>
																	</div>
																	<div class="sc_testimonial_author">
																		<a href="#">The Best Family Holiday</a>
																	</div>
																	<div class="sc_testimonial_content">
																		<p>This was one of the most amazing family holidays we have ever had. The perfect mix of<br />
																		relaxing holiday time and experiencing a different country and culture with our family.</p>
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
							</section>

						</div>
					</article>
				</div>
			</div>
@endsection
