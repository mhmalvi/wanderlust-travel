@extends('layouts.app')

@section('content')
    <div class="post_content">
        <section class="">
            <div class="">
                <div class="sc_section">
                    <h2 class="sc_title margin_top_0 margin_bottom_0">GET IN TOUCH</h2>
                    <h5 class="sc_undertitle sc_undertitle_style_3">132 EAST 70TH STREET, NEW YORK, NY 10021</h5>
                </div>
            </div>
        </section>

        <section class="">
            <div class="">
                <div class="sc_section sc_text_style_3 margin_top_20 margin_bottom_40">
                    We understand that sometimes each person just wants to get away from an everyday routine. Which is why we are making holidays accessible to everyone. Whether it’s a family holiday, or a spa resort vacation, or a pilgrimage, our team is there to help you make up your mind about your next trip. Contact us regarding any travel related issue or vacation booking. Find your dream vacation in our collection of specially priced packages.
                </div>
            </div>
        </section>

        <section class="">
            <div class="">
                <div class="sc_section image_bg_contact margin_bottom_60">
                    <div class="sc_section_overlay">
                        <div class="sc_section_content">
                            <div class="sc_section sc_section_style_4 aligncenter">
                                <div class="columns_wrap sc_columns sc_columns_count_3">
                                    <div class="column-1_3 sc_column_item sc_column_item_1 odd first sc_align_center">
                                        <span class="sc_icon sc_icon_style_3 icon-phone sc_icon_shape_round">
                                        </span>
                                        <div class="sc_content content_wrap margin_top_15">
                                            <h5 class="sc_undertitle sc_undertitle_style_4">CALL US:</h5>
                                            <h5 class="sc_undertitle sc_undertitle_style_4">1.800.123.4567</h5>
                                        </div>
                                    </div>
                                    <div class="column-1_3 sc_column_item sc_column_item_2 even sc_align_center">
                                        <span class="sc_icon sc_icon_style_3 icon-link-1 sc_icon_shape_round">
                                        </span>
                                        <div class="sc_content content_wrap margin_top_15">
                                            <h5 class="sc_undertitle sc_undertitle_style_4">WEBSITE:</h5>
                                            <h5 class="sc_undertitle sc_undertitle_style_4">WWW.YOURSITE.COM</h5>
                                        </div>
                                    </div>
                                    <div class="column-1_3 sc_column_item sc_column_item_3 odd sc_align_center">
                                        <span class="sc_icon sc_icon_style_3 icon-mail-1 sc_icon_shape_round">
                                        </span>
                                        <div class="sc_content content_wrap margin_top_15">
                                            <h5 class="sc_undertitle sc_undertitle_style_4">EMAIL US:</h5>
                                            <h5 class="sc_undertitle sc_undertitle_style_4">INFO@YOURSITE.COM</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="">
            <div class="">
                <h2 class="sc_title margin_bottom_0">HOW TO GET THERE</h2>
                <div class="sc_section sc_text_style_3 margin_top_20 margin_bottom_40">
                    We understand that sometimes each person just wants to get away from an everyday routine. Which is why we are making holidays accessible to everyone. Whether it’s a family holiday, or a spa resort vacation, or a pilgrimage, our team is there to help you make up your mind about your next trip. Contact us regarding any travel related issue or vacation booking. Find your dream vacation in our collection of specially priced packages.
                </div>
            </div>
        </section>

        <section class="">
            <div class="">
                <div id="sc_googlemap_527874862" class="sc_googlemap sc_googlemap_style_2 margin_bottom_40" data-address="San Francisco, CA 94102, US" data-description="San Francisco, CA 94102, US" data-latlng="" data-zoom="16" data-style="default" data-point="images/28x38.png"></div>
            </div>
        </section>


        <section class="">
            <div class="">
                <div class="sc_section">
                    <h2 class="sc_title margin_bottom_0">SEND US A MESSAGE</h2>
                    <h5 class="sc_undertitle sc_undertitle_style_1 margin_top_5 margin_bottom_30">FILL IN THE FORM BELOW</h5>
                    <div class="sc_contact_form sc_contact_form_standard contact_form_1">
                        <form class="contact_1" method="post" action="include/contact-form.php">
                            <div class="sc_contact_form_info">
                                <div class="sc_contact_form_item sc_contact_form_field label_over">
                                    <input type="text" name="name" id="contact_form_username" placeholder="Name">
                                </div>
                                <div class="sc_contact_form_item sc_contact_form_field label_over">
                                    <input type="text" name="email" id="contact_form_email" placeholder="Email">
                                </div>
                            </div>
                            <div class="sc_contact_form_item sc_contact_form_message label_over">
                                <textarea  id="contact_form_message" class="textAreaSize" name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="sc_contact_form_button">
                                <div class="sc_contact_form_item sc_contact_form_button">
                                    <button type="submit" name="contact_submit" class="contact_form_submit">SEND MESSAGE</button>
                                </div>
                            </div>

                            <div class="result sc_infobox"></div>
                        </form>
                    </div> 
                </div>
            </div>
        </section>

    </div>
@endsection
