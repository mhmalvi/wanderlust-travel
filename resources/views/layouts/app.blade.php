<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">
        <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Toptrip') }}</title>
        
        <!--<link rel='stylesheet' href='custom_tools/css/front.customizer.css' type='text/css' media='all' />-->
        

        @include('layouts.styles')
    </head>

    @php
        $class = "";

        switch (Route::currentRouteName()) {
            case 'home':
                $class = "page body_style_fullscreen body_filled article_style_stretch top_panel_opacity_transparent top_panel_over menu_right sidebar_hide";
                break;
            case 'gallary':
                $class = "archive body_style_wide body_filled article_style_stretch template_alternative top_panel_opacity_solid top_panel_above menu_right sidebar_hide";
                break;
            case 'contact':
                $class = "page body_style_wide body_filled article_style_stretch top_panel_opacity_solid top_panel_above menu_right sidebar_hide";
                break;
            default:
                $class = "page body_style_fullscreen body_filled article_style_stretch top_panel_opacity_solid top_panel_above menu_right sidebar_hide";
                break;
        }
    @endphp
    <body class="{{$class}}">
        
        <div class="body_wrap" id="app">
            <div class="page_wrap">
                <div class="top_panel_fixed_wrap"></div>

                @include('layouts.header')

                @yield('content')

                @include('layouts.footer')

                @include('layouts.copywrite')

            </div>
        </div>


        <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>


        <script src="{{ asset('js/app.js') }}"></script>
        @include('layouts.scripts')
    </body>
</html>