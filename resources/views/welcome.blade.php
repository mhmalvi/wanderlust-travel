<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <title>Toptrip</title>
	
	<!--<link rel='stylesheet' href='custom_tools/css/front.customizer.css' type='text/css' media='all' />-->
	

    @include('layouts.styles')
</head>

<body class="page body_style_fullscreen body_filled article_style_stretch top_panel_opacity_transparent top_panel_over menu_right sidebar_hide">
	
	<div class="body_wrap">
		<div class="page_wrap">
			<div class="top_panel_fixed_wrap"></div>

            @include('layouts.header')

            @include('layouts.slider')

			<div class="page_content_wrap">
				<div class="content">
					<article class="post_item post_item_single page">
                        @yield('content')
					</article>
				</div>
			</div>

            @include('layouts.footer')

            @include('layouts.copywrite')

		</div>
	</div>


	<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>


    @include('layouts.scripts')
</body>
</html>