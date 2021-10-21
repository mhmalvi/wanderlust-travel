@extends('layouts.app')

@section('content')
    			<div class="page_top_wrap page_top_title page_top_breadcrumbs">
				<div class="breadcrumbs">
					<div class="content_wrap">
						<a class="breadcrumbs_item home" href="index.html">Home</a><span class="breadcrumbs_delimiter"></span><a class="breadcrumbs_item all" href="#">All posts</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Gallery Masonry</span>
					</div>
				</div>
				<div class="page_title_wrap content_wrap page_title_wrap_style_2">
					<span class="page_title_bg"></span>
					<h1 class="page_title">Gallery</h1>
				</div>
			</div>

			<div class="page_content_wrap container">
				<div class="content">

					<section class="">
						<div class="">
							<div class="isotope_filters">
								<a href="#" data-filter="*" class="isotope_filters_button active">All</a>
								<a href="#" data-filter=".flt_136" class="isotope_filters_button">sea</a>
								<a href="#" data-filter=".flt_138" class="isotope_filters_button">holiday</a>
								<a href="#" data-filter=".flt_32" class="isotope_filters_button">tour</a>
								<a href="#" data-filter=".flt_36" class="isotope_filters_button">travel</a>
								<a href="#" data-filter=".flt_34" class="isotope_filters_button">resort</a>
								<a href="#" data-filter=".flt_137" class="isotope_filters_button">relaxation</a>
								<a href="#" data-filter=".flt_139" class="isotope_filters_button">city</a>
							</div>
							<div class="isotope_wrap portfolio " data-columns="2">
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_136">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_standard odd">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="Flip Flops And Sunglasses in a Bag" src="{{asset('assets/images/gallary/1.jpg')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">Flip Flops And Sunglasses in a Bag</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/1.jpg')}}" title="Flip Flops And Sunglasses in a Bag">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_138 flt_32">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_standard even">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="Travel in the Middle East in 2015" src="{{asset('assets/images/gallary/2.jpg')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">Travel in the Middle East in 2015</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/2.jpg')}}" title="Travel in the Middle East in 2015">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_36">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_standard odd">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="Barbados &#8211; A Superyacht Destination!" src="{{asset('assets/images/gallary/3.jpg')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">Barbados &#8211; A Superyacht Destination!</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/3.jpg')}}" title="Barbados &#8211; A Superyacht Destination!">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_34 flt_136">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_standard even">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="The 10 Most Visited Cities of the World" src="{{asset('assets/images/gallary/4.jpg')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">The 10 Most Visited Cities of the World</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/4.jpg')}}" title="The 10 Most Visited Cities of the World">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_138 flt_136">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_standard odd">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="Your Bali Holiday" src="{{asset('assets/images/gallary/5.jpg')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">Your Bali Holiday</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/5.jpg')}}" title="Your Bali Holiday">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_137">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_standard even">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="Masterpieces of Nature" src="{{asset('assets/images/gallary/6.jpg')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">Masterpieces of Nature</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/6.jpg')}}" title="Masterpieces of Nature">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_139 flt_138">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_standard odd">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="The Most Romantic Cities In the World" src="{{asset('assets/images/gallary/7.jpg')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">The Most Romantic Cities In the World</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/7.jpg')}}" title="The Most Romantic Cities In the World">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_32">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_standard even">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="One&amp;Only Palmilla" src="{{asset('assets/images/gallary/9.jpg')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">One&#038;Only Palmilla</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/9.jpg')}}" title="One&amp;Only Palmilla">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_32">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_standard odd">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="Belmond Jimbaran Puri" src="{{asset('assets/images/gallary/10.jpg')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">Belmond Jimbaran Puri</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/10.jpg')}}" title="Belmond Jimbaran Puri">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_136">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_gallery even">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="The Betsy South Beach" src="{{asset('assets/images/gallary/11.jpg')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">The Betsy South Beach</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/11.jpg')}}" title="The Betsy South Beach">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_36">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_standard odd">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="Fontainebleau Miami Beach" src="{{asset('assets/images/gallary/12.jpg')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">Fontainebleau Miami Beach</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/12.jpg')}}" title="Fontainebleau Miami Beach">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_36">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_standard odd">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="Fontainebleau Miami Beach" src="{{asset('assets/images/gallary/13.jpg')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">Fontainebleau Miami Beach</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/13.jpg')}}" title="Fontainebleau Miami Beach">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_36">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_standard odd">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="Fontainebleau Miami Beach" src="{{asset('assets/images/gallary/14.jpg')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">Fontainebleau Miami Beach</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/14.jpg')}}" title="Fontainebleau Miami Beach">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_36">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_standard odd">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="Fontainebleau Miami Beach" src="{{asset('assets/images/gallary/15.jpg')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">Fontainebleau Miami Beach</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/15.jpg')}}" title="Fontainebleau Miami Beach">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_36">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_standard odd">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="Fontainebleau Miami Beach" src="{{asset('assets/images/gallary/16.jpg')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">Fontainebleau Miami Beach</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/16.jpg')}}" title="Fontainebleau Miami Beach">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_36">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_standard odd">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="Fontainebleau Miami Beach" src="{{asset('assets/images/gallary/17.png')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">Fontainebleau Miami Beach</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/17.png')}}" title="Fontainebleau Miami Beach">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_36">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_standard odd">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="Fontainebleau Miami Beach" src="{{asset('assets/images/gallary/18.jpg')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">Fontainebleau Miami Beach</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/18.jpg')}}" title="Fontainebleau Miami Beach">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_2 isotope_column_2 flt_36">
									<article class="post_item post_item_portfolio post_item_portfolio_2 post_format_standard odd">
										<div class="post_content isotope_item_content">
											<div class="post_featured img">
												<img alt="Fontainebleau Miami Beach" src="{{asset('assets/images/gallary/19.jpg')}}">
												<div class="hover_wrap">
													<div class="hover_content">
														<h4 class="post_title">
														<a href="#">Fontainebleau Miami Beach</a>
														</h4>
														<a class="hover" href="{{asset('assets/images/gallary/19.jpg')}}" title="Fontainebleau Miami Beach">
														</a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
							</div>
						</div>
					</section>

				</div>
			</div>
@endsection
