<header class="top_panel_wrap" >
    <div class="menu_main_wrap logo_left with_text">
        <div class="menu_content_wrap clearfix">
            <div class="logo">
                <a href="">
                    <img src="{{asset('assets/logo.png')}}" alt="logo" style="max-width: 120px;">
                </a>
            </div>
            <div class="login_wrap">
                <a href="#user-popUp" class="popup_link popup_login_link">
                    Log in
                </a>
                <div id="user-popUp" class="user-popUp mfp-with-anim mfp-hide">
                    <div class="sc_tabs">
                        <ul class="loginHeadTab">
                            <li>
                                <a href="#loginForm" class="loginFormTab icon">Log In</a>
                            </li>
                            <li>
                                <a href="#registerForm" class="registerFormTab icon">Create an Account</a>
                            </li>
                        </ul>
                        <div id="loginForm" class="formItems loginFormBody popup_wrap popup_login">
                            <div class="form_left">
                                <form action="#" method="post" name="login_form" class="popup_form login_form">
                                    <input type="hidden" name="redirect_to" value="#">
                                    <div class="icon popup_form_field login_field iconed_field icon-mail-1">
                                        <input type="text" id="log" name="log" value="" placeholder="Login or Email">
                                    </div>
                                    <div class="icon popup_form_field password_field iconed_field icon-lock-1">
                                        <input type="password" id="password" name="pwd" value="" placeholder="Password">
                                    </div>
                                    <div class="popup_form_field remember_field">
                                        <a href="#" class="forgot_password">Forgot password?</a>
                                        <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                                        <label for="rememberme">Remember me</label>
                                    </div>
                                    <div class="popup_form_field submit_field">
                                        <input type="submit" class="submit_button sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_medium" value="Login">
                                    </div>
                                </form>
                            </div>
                            <div class="form_right">
                                <div class="login_socials_title">You can login using your social profile</div>
                                <div class="login_socials_list">
                                    <a href="#" class="iconLogin fb"></a>
                                    <a href="#" class="iconLogin tw"></a>
                                    <a href="#" class="iconLogin gg"></a>
                                </div>
                                <div class="login_socials_problem">
                                    <a href="#">Problem with login?</a>
                                </div>
                                <div class="result message_block"></div>
                            </div>
                        </div>
                        <div id="registerForm" class="formItems registerFormBody popup_wrap popup_registration">
                            <form name="registration_form" method="post" class="popup_form registration_form">
                                <input type="hidden" name="redirect_to" value="#"/>
                                <div class="form_left">
                                    <div class="icon popup_form_field login_field iconed_field icon-user-3">
                                        <input type="text" id="registration_username" name="registration_username"  value="" placeholder="User name (login)">
                                    </div>
                                    <div class="icon popup_form_field email_field iconed_field icon-mail-1">
                                        <input type="text" id="registration_email" name="registration_email" value="" placeholder="E-mail">
                                    </div>
                                    <div class="popup_form_field agree_field">
                                        <input type="checkbox" value="agree" id="registration_agree" name="registration_agree">
                                        <label for="registration_agree">I agree with</label> 
                                        <a href="#">Terms &amp; Conditions</a>
                                    </div>
                                    <div class="popup_form_field submit_field">
                                        <input type="submit" class="submit_button sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_medium" value="Sign Up">
                                    </div>
                                </div>
                                <div class="form_right">
                                    <div class="icon popup_form_field password_field iconed_field icon-lock-1">
                                        <input type="password" id="registration_pwd"  name="registration_pwd"  value="" placeholder="Password">
                                    </div>
                                    <div class="icon popup_form_field password_field iconed_field icon-lock-1">
                                        <input type="password" id="registration_pwd2" name="registration_pwd2" value="" placeholder="Confirm Password">
                                    </div>
                                    <div class="popup_form_field description_field">Minimum 6 characters</div>
                                </div>
                            </form>
                            <div class="result messageBlock"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart">
                <a href="#" class="cart_button icon-shopping-cart"></a>
                <ul class="sidebar_cart">
                    <li>
                        <div class="widget woocommerce widget_shopping_cart">
                            <div class="widget_shopping_cart_content">
                                <ul class="cart_list product_list_widget ">
                                    <li class="empty">No products in the cart.</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <a href="#" class="menu_main_responsive_button icon-menu-1"></a>
            @include('layouts.navigation')
        </div>
    </div>
</header>