@extends('nordiccell.layouts.app')
@section( 'title', 'Dashboard')
@section('content')
    <div class="content-wrapper">

        <div class="post-header">

            <header class="hero hero--size-large hero--align-left">


                <div class="hero__text-wrap ">

                    <h1 class="hero__title">Checkout</h1>



                </div>


            </header>
        </div>



        <div class="content-main">

            <main>





                <article id="article-8" class="post-wrapper post-8 page type-page status-publish hentry">


                    <div class="post-content">

                        <div class="woocommerce"><div class="woocommerce-notices-wrapper"></div><div class="woocommerce-notices-wrapper"></div>
                            <form name="checkout" method="post" class="checkout woocommerce-checkout" action="{{route('order.store')}}" enctype="multipart/form-data" novalidate="novalidate" data-gtm-form-interact-id="0">
                                @csrf


                                <div class="checkout-optimizer  checkout-optimizer__col2-set"><div class="checkout-optimizer checkout-optimizer__col-1">
                                        <div class="col2-set" id="customer_details">
                                            <div class="col-1">
                                                <wc-order-attribution-inputs><input type="hidden" name="wc_order_attribution_source_type" value="referral"><input type="hidden" name="wc_order_attribution_referrer" value="http://127.0.0.1:8000/"><input type="hidden" name="wc_order_attribution_utm_campaign" value="(none)"><input type="hidden" name="wc_order_attribution_utm_source" value="127.0.0.1"><input type="hidden" name="wc_order_attribution_utm_medium" value="referral"><input type="hidden" name="wc_order_attribution_utm_content" value="/"><input type="hidden" name="wc_order_attribution_utm_id" value="(none)"><input type="hidden" name="wc_order_attribution_utm_term" value="(none)"><input type="hidden" name="wc_order_attribution_utm_source_platform" value="(none)"><input type="hidden" name="wc_order_attribution_utm_creative_format" value="(none)"><input type="hidden" name="wc_order_attribution_utm_marketing_tactic" value="(none)"><input type="hidden" name="wc_order_attribution_session_entry" value="https://nordiccell.com/cart/"><input type="hidden" name="wc_order_attribution_session_start_time" value="2024-10-04 17:41:02"><input type="hidden" name="wc_order_attribution_session_pages" value="19"><input type="hidden" name="wc_order_attribution_session_count" value="6"><input type="hidden" name="wc_order_attribution_user_agent" value="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36"></wc-order-attribution-inputs><div class="woocommerce-billing-fields">
                                                    <h3>Checkout</h3>
                                                    <input type="hidden" name="company-id" value="ekROSsZxQoM=">





                                                    <div class="woocommerce-additional-fields">
                                                        <p class="form-row form-row-wide" id="billing_your_order_ref_field" data-priority="41"><label for="billing_your_order_ref" class="">Your order ref.&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_your_order_ref" id="billing_your_order_ref" placeholder="Your order ref" value=""></span></p>        </div>
                                                    <h3>
                                                        Billing details            <a href="/my-account/edit-company/billing?company-id=389" class="company-edit-address">
                                                            <img decoding="async" src="https://nordiccell.com/wp-content/themes/nordiccell/assets/dist/icons/icon_edit.svg" alt="icon-dedit">
                                                        </a>
                                                    </h3>




                                                    <div class="">
                                                        <div class="company-info">
                                                            <div class="seperate-block">
                                                                <div class="small-title">Customer no.:</div>
                                                                122230                        </div>

                                                            Västerås IVF AB<br>
                                                            Norra Källgatan 16<br>                                                72211 Västerås<br>                        Sweden<br>                    </div>


                                                        <div class="seperate-block">
                                                            <div class="small-title">Invoice is sent to:</div>
                                                            lev.levkov@gmail.com                    </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-2">

                                                <div class="woocommerce-shipping-fields">
                                                    <h3 id="ship-to-different-address">
                                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                            <input id="ship-to-different-address-checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" type="checkbox" name="ship_to_different_address" value="1"> <span>Deliver to a different address?</span>
                                                        </label>
                                                    </h3>

                                                    <div class="shipping_address" style="display: none;">
                                                        <h3>Shipping details</h3>

                                                        <div class="woocommerce-shipping-fields__field-wrapper">
                                                            <p class="form-row form-row-wide validate-required" id="shipping_company_field" data-priority="30"><label for="shipping_company" class="">Company name&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="shipping_company" id="shipping_company" placeholder="" value="Västerås IVF AB" autocomplete="organization"></span></p><p class="form-row form-row-wide" id="shipping_attn_field" data-priority="30"><label for="shipping_attn" class="">Attn.&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="shipping_attn" id="shipping_attn" placeholder="Attention" value=""></span></p><p class="form-row address-field validate-state form-row-wide" id="shipping_state_field" style="display: none" data-o_class="form-row form-row-wide address-field validate-state"><label for="shipping_state" class="">State / County&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><input type="hidden" id="shipping_state" name="shipping_state" placeholder="" data-input-classes="" class="hidden"></span></p><p class="form-row address-field validate-required form-row-first" id="shipping_address_1_field" data-priority="50"><label for="shipping_address_1" class="">Street address&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="shipping_address_1" id="shipping_address_1" placeholder="Enter your House number and street name" value="Norra Källgatan 16" autocomplete="address-line1" data-placeholder="Enter your House number and street name"></span></p><p class="form-row address-field form-row-last" id="shipping_address_2_field" data-priority="60"><label for="shipping_address_2" class="screen-reader-text">Second address&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="shipping_address_2" id="shipping_address_2" placeholder="" value="" autocomplete="address-line2" data-placeholder=""></span></p><p class="form-row address-field validate-required validate-postcode form-row-first" id="shipping_postcode_field" data-priority="65" data-o_class="form-row form-row-first address-field validate-required validate-postcode"><label for="shipping_postcode" class="">ZIP&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="shipping_postcode" id="shipping_postcode" placeholder="Enter your zip code..." value="722 11" autocomplete="postal-code" data-placeholder="Enter your zip code..."></span></p><p class="form-row address-field validate-required form-row-last" id="shipping_city_field" data-priority="70" data-o_class="form-row form-row-last address-field validate-required"><label for="shipping_city" class="">City&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="shipping_city" id="shipping_city" placeholder="Enter your city..." value="Västerås" autocomplete="address-level2" data-placeholder="Enter your city..."></span></p><p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="shipping_country_field" data-priority="100"><label for="shipping_country" class="">Country/Region&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><select name="shipping_country" id="shipping_country" class="country_to_state country_select select2-hidden-accessible" autocomplete="country" data-placeholder="Select a country / region…" data-label="Country/Region" tabindex="-1" aria-hidden="true"><option value="">Select a country / region…</option><option value="AF">Afghanistan</option><option value="AX">Åland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="PW">Belau</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BQ">Bonaire, Saint Eustatius and Saba</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo (Brazzaville)</option><option value="CD">Congo (Kinshasa)</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="SZ">Eswatini</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="CI">Ivory Coast</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MK">North Macedonia</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestinian Territory</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="ST">São Tomé and Príncipe</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="SX">Saint Martin (Dutch part)</option><option value="MF">Saint Martin (French part)</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia/Sandwich Islands</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SE" selected="selected">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom (UK)</option><option value="US">United States (US)</option><option value="UM">United States (US) Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (US)</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-label="Country/Region" role="combobox"><span class="select2-selection__rendered" id="select2-shipping_country-container" role="textbox" aria-readonly="true" title="Sweden">Sweden</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><noscript><button type="submit" name="woocommerce_checkout_update_totals" value="Update country/region">Update country/region</button></noscript></span></p></div>


                                                    </div>

                                                </div>
                                                <div class="woocommerce-additional-fields">



                                                    <div class="woocommerce-additional-fields__field-wrapper">
                                                        <p class="form-row notes" id="order_comments_field" data-priority=""><label for="order_comments" class="">Order notes&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Enter your message..." rows="2" cols="5"></textarea></span></p>					</div>



                                                </div>

                                            </div>
                                        </div>

                                    </div><div class="checkout-optimizer checkout-optimizer__col-2">


                                        <h3 id="order_review_heading">Your order</h3>


                                        <div id="order_review" class="woocommerce-checkout-review-order">


                                            <table class="shop_table woocommerce-checkout-review-order-table">
                                                <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Amount</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($carts as $cart)
                                                    @foreach($cart->products as $product)
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        <a href="https://nordiccell.com/product/exem-foam-kit-excl-catheter-2/">
                                                            <img width="300" height="300" src="{{$product->product_images->sortBy('created_at')->first()->getImageUrl()}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="{{$product->product_images->sortBy('created_at')->first()->getImageUrl()}}" sizes="(max-width: 300px) 100vw, 300px">                        </a>

                                                        <a href="https://nordiccell.com/product/exem-foam-kit-excl-catheter-2/">
                                                            <span class="product-name-title">{{$product->title}}</span>
                                                        </a>
                                                        <span class="price sku">{{$product->ref_number}}</span> <span class="separator">|</span>
                                                        <span class="quantity">{{$cart->quantity}} × <span class="woocommerce-Price-amount amount"><bdi>{{$product->price}}&nbsp;<span class="woocommerce-Price-currencySymbol">EUR</span></bdi></span></span>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="woocommerce-Price-amount amount"><bdi>{{$cart->price}}&nbsp;<span class="woocommerce-Price-currencySymbol">EUR</span></bdi></span>                    </td>
                                                </tr>
                                                    @endforeach
                                                @endforeach
                                                </tbody>
                                                <tfoot>













                                                <tr class="order-total">
                                                    <th>Total*</th>
                                                    <td><strong><span class="woocommerce-Price-amount amount"><bdi>{{$totalPrice}}&nbsp;<span class="woocommerce-Price-currencySymbol">EUR</span></bdi></span></strong> </td>
                                                </tr>

                                                <tr class="order-total-notification">
                                                    <td colspan="2">* Shipping costs and VAT (if relevant) will be added to the final invoice.</td>
                                                </tr>




                                                </tfoot>
                                            </table>

                                            <div id="payment" class="woocommerce-checkout-payment">
                                                <ul class="wc_payment_methods payment_methods methods">
                                                    <li class="wc_payment_method payment_method_cod">
                                                        <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" checked="checked" data-order_button_text="" style="display: none;">

                                                        <label for="payment_method_cod">
                                                            Invoice 	</label>
                                                    </li>
                                                </ul>
                                                <div class="form-row place-order">
                                                    <noscript>
                                                        Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.			<br/><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals">Update totals</button>
                                                    </noscript>

                                                    <div class="woocommerce-terms-and-conditions-wrapper">
                                                        <div class="woocommerce-privacy-policy-text"><p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="https://nordiccell.com/cookie-and-privacy-policy/" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
                                                        </div><div class="woocommerce-terms-and-conditions" style="display: none; max-height: 200px; overflow: auto;"><h3 class="wp-block-heading"><em>Conditions of use</em></h3>
                                                            <p>Welcome to our website. We provide our services to you subject to the following conditions. If you visit or shop within this website, you accept these conditions. Please take notice of our conditions.</p>
                                                            <h3 class="wp-block-heading"><em>Privacy</em></h3>
                                                            <p>We respect your privacy and all the legal frameworks applying to online activities. To understand our practices, please review our Privacy Notice, which also governs your visit to our website.</p>
                                                            <h3 class="wp-block-heading"><em>Electronic communications and interactions</em></h3>
                                                            <p>When you visit NordicCell.com or send e-mails to us, you are communicating with us electronically. You consent to receive communications from us electronically. We normally communicate with you by e-mail or through our site. You agree that all agreements, notices, disclosures and other communications that we provide to you electronically satisfy any legal requirement that such communications are in written form.</p>
                                                            <h3 class="wp-block-heading"><em>Copyright</em></h3>
                                                            <p>All content included on this site, such as text, graphics, logos, button icons, images, audio clips, digital downloads, data compilations and software, is the property of NordicCell ApS or its content suppliers and protected by international copyright laws. </p>
                                                            <h3 class="wp-block-heading"><em>Trademarks</em></h3>
                                                            <p>NordicCell’s trademarks – name, logo etc. – may not be used in connection with any product or service that is not NordicCell’s, in any manner that is likely to cause confusion among customers or in any manner that disparages or discredits NordicCell. The same applies for other trademarks that appear on our site.</p>
                                                            <h3 class="wp-block-heading"><em>Licence and site access</em></h3>
                                                            <p>NordicCell permits you to access and make personal use of this site, but not to download (other than page caching) or modify it, or any portion of it, except with clear written consent from NordicCell ApS. This license does not include any resale or commercial use of this site or its content; any collection and use of any product listings, descriptions or prices; any derivative use of this site or its content; any downloading or copying of account information for the benefit of another merchant or any use of data mining, robots or similar data gathering and extraction tools. This site or any portion of this site may not be reproduced, duplicated, copied, sold, resold, visited, or otherwise exploited for any commercial purpose without clear written consent from NordicCell ApS. All these provisions and all other aspects related to these matters are regulated by Danish and international law.</p>
                                                            <h3 class="wp-block-heading"><em>Your membership account</em></h3>
                                                            <p>If you use this site, you are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer, and you agree to accept responsibility for all activities that occur under your account or password. NordicCell ApS reserves the right to refuse service, terminate accounts, remove or edit content or cancel orders at their sole discretion.</p>
                                                            <h3 class="wp-block-heading"><em>Reviews, comments, emails and other content</em></h3>
                                                            <p>Visitors may post reviews, comments and other content and submit suggestions, ideas, comments, questions or other information, provided the content is not illegal, obscene, threatening, defamatory, invasive of privacy, infringing of intellectual property rights or otherwise injurious to third parties or objectionable and does not consist of or contain software viruses, political campaigning, commercial solicitation, chain letters, mass mailings or any form of “spam.” </p>
                                                            <p>You may not use a false e-mail address, impersonate any person or entity or otherwise mislead as to the origin of a card or other content. NordicCell ApS reserves the right to remove or edit such content but does not regularly review posted content. </p>
                                                            <p>Unless otherwise indicated, if you do post content or submit material, you grant NordicCell ApS and its associates a non-exclusive, royalty-free, perpetual, irrevocable and fully sublicensable right to use, reproduce, modify, adapt, publish, translate, create derivative works from, distribute and display such content throughout the world in any media. You grant NordicCell ApS and its associates and sublicensees the right to use the name that you submit in connection with such content, if they choose. </p>
                                                            <p>You represent and warrant that you own or otherwise control all of the rights to the content that you post: that the content is accurate: that use of the content you supply does not violate this policy and will not cause injury to any person or entity: and that you will indemnify NordicCell ApS or its associates for all claims resulting from content you supply. NordicCell ApS has the right but not the obligation to monitor and edit or remove any activity or content. NordicCell ApS takes no responsibility and assumes no liability for any content posted by you or any third party.</p>
                                                            <h3 class="wp-block-heading"><em>Risk of loss – incoterms</em></h3>
                                                            <p>All items purchased from NordicCell ApS are made pursuant to a shipment contract. This basically means that the risk of loss and title for such items passes to you upon our delivery to the carrier according to Incoterms 2010, CPT.</p>
                                                            <h3 class="wp-block-heading"><em>Product descriptions</em></h3>
                                                            <p>NordicCell ApS and its associates attempt to be as accurate as possible. However, NordicCell ApS does not warrant that product descriptions or other content of this site is accurate, complete, reliable, current or error-free. If a product offered by NordicCell ApS itself is not as described, your sole remedy is to return it in unused condition.&nbsp;</p>
                                                            <h3 class="wp-block-heading"><em>Warranty</em></h3>
                                                            <p>As a distributor, NordicCell ApS carries a limited responsibility for the products. Basically, the maker of the individual product guarantees the product either according to the law or according to the maker’s own set of warranties. Normally, all products will be issued with a specification of the warranty.</p>
                                                            <p>NordicCell ApS and its partners will at any time adhere to all legal requirements related to product responsibility, warranty and claims.</p>
                                                            <h3 class="wp-block-heading"><em>Warranty does not apply if:</em></h3>
                                                            <p>• The warranty period is expired&nbsp;<br>• The product label is broken, removed or illegible&nbsp;<br>• The lot no./serial number label is missing or unrecognizable&nbsp;<br>• The product has been modified or repaired by any unauthorized service centre or personnel&nbsp;<br>• The defect was caused by abuse, improper use, storage or actions in any way not conforming to the instructions in the product manual(s) or by environmental conditions more severe than those specified in the manual and specifications&nbsp;<br>• The defect was caused by Force Majeure</p>
                                                            <h3 class="wp-block-heading"><em>Applicable law</em></h3>
                                                            <p>By visiting NordicCell.com, you agree that these Conditions of Use are governed by Danish law, without regard to principles of conflict of laws, and that any sort of dispute that might arise between you and NordicCell ApS or its associates is subject to Danish law.</p>
                                                            <h3 class="wp-block-heading"><em>Disputes</em></h3>
                                                            <p>Disputes are sought to be solved through dialogue.</p>
                                                            <p>In case disputes cannot be settled out of court, they will be taken to a Danish court of law following normal Danish law procedures and with Copenhagen (Denmark) as legal venue.</p>
                                                            <h3 class="wp-block-heading"><em>Site policies, modification and severability</em></h3>
                                                            <p>Please review our other policies, such as our Shipping and Returns policy, posted on this site. These policies also govern your visit to NordicCell.com. We reserve the right to make changes to our site, policies and these Conditions of Use at any time. If any of these conditions shall be deemed invalid, void or for any reason unenforceable, that condition shall be deemed severable and shall not affect the validity and enforceability of any remaining condition.</p>
                                                            <h3 class="wp-block-heading"><em>Questions:</em></h3>
                                                            <p>Questions regarding our Conditions of Use, Privacy Policy or other policy related material can be directed to our support staff by clicking on the “Contact Us” link in the side menu. Or you can email us at: <a href="mailto:info@nordiccell.com">info@nordiccell.com</a></p>
                                                            <h3 class="wp-block-heading"><em>Misuse of the site</em></h3>
                                                            <p>You may not use the Site for any purpose which is unlawful, abusive, libellous, obscene or threatening.</p>
                                                            <h3 class="wp-block-heading"><em>Changes</em></h3>
                                                            <p>The information, material and content provided in the pages of this Site may be changed at any time without notice. We may make changes to these Terms and Conditions at any time without notice to you by updating the posting of the Terms and Conditions.</p>
                                                            <h3 class="wp-block-heading"><em>Disclaimer</em></h3>
                                                            <h4 class="wp-block-heading"><strong>General disclaimer</strong></h4>
                                                            <p>Prices may change without prior notice.</p>
                                                            <p>While NordicCell strives to keep vital stock at all times, the company shall not be liable if or when stocks are depleted. Correspondingly, certain products are made to order and will therefore not be in stock.</p>
                                                            <p>Freight and delivery is handled by third party companies (TERMS AND CONDITIONS)</p>
                                                            <h4 class="wp-block-heading">Legal Disclaimer</h4>
                                                            <p>While NordicCell ApS is always trying its utmost to make sure all information on this website is reliable and accurate, NordicCell ApS does not endorse, approve or certify such information, nor does it guarantee timeliness, completeness or accuracy of such information.</p>
                                                            <p>Certain links on this website lead to content on external websites that are maintained by a third party, which NordicCell has no control over. NordicCell does not guarantee the accuracy of the content on these websites.</p>
                                                            <p><strong>For product or service complaints, please contact us <a href="https://nordiccell.com/contact/">here</a></strong><a href="https://nordiccell.com/contact/"> </a></p>
                                                            <h4 class="wp-block-heading">Email disclaimer</h4>
                                                            <p>This email/article and any attachments to it may be confidential and is intended solely for the use of the individual to whom it is addressed. Any views or opinions expressed are solely those of the author and do not necessarily represent those of NordicCell ApS</p>
                                                            <p>If you are not the intended recipient of this email, you must neither take any action based upon its contents, nor copy or show it to anyone.</p>
                                                            <p>Please contact the sender if you believe you have received this email by mistake.</p>
                                                            <h4 class="wp-block-heading">Article disclaimer</h4>
                                                            <p>Any views or opinions expressed within this article are solely those of the author and do not necessarily represent those of NordicCell ApS</p>
                                                            <h4 class="wp-block-heading">Return Policy</h4>
                                                            <p>When filing a complaint or returning erroneously ordered items, you contact a member of our staff at <a href="mailto:info@nordiccell.com">info@nordiccell.com</a> within 14 days of receiving the product. &nbsp;</p>
                                                            <p>The return request must be approved by us after which we will send a confirmation with further information on how to handle the products in order to avoid problems or misunderstandings. </p>
                                                            <p>Erroneously ordered products are credited with 80 percent of the sales amount. </p>
                                                            <p>Once the product has been returned, its condition will be assessed before the customer is credited. </p>
                                                            <p>The following criteria for returns must be met:</p>
                                                            <p>The product must be returned in its original packaging. Erroneously ordered products must be returned within 14 days after receiving them. Damaged products or products that have been written upon are not credited except by special agreement. All labels must be intact and affixed to the product. Seals must remain unbroken. The product must be returned in as-new and re-sellable condition. </p>
                                                            <h4 class="wp-block-heading">Shipping info</h4>
                                                            <p>NordicCell strives to deliver as soon as possible. </p>
                                                            <p>Shipments/invoices are subject to VAT (25%) within the Danish country limit.</p>
                                                            <p>We deliver worldwide and try hard to find the cheapest delivery method. Shipping choice depends on the on the type of shipment requested. NordicCell normally uses the forwarder DHL Express. Customers are welcome to use their own forwarder, which shall be stated on the request order, including correct forwarder and customer ID.</p>
                                                            <p>Customers are also requested to state whether the shipment is urgent. This will, however, increase the shipping costs. &nbsp;All shipments are ex works.</p>
                                                            <p>Within Danish territory, the shipment is next day (except smaller islands by ferry connection) if goods are in stock and the order is placed before 12.00 pm. </p>
                                                            <p>Shipments to other countries are approx. 2-5 business days. The order confirmation will be provided with the estimated time of shipment date.</p>
                                                            <p>Delivery address that differs from the invoice address is also possible.</p>
                                                            <p>Shipments within the European countries need a valid VAT number, which should be stated in the order request. Otherwise the invoice will be subject to applicable VAT in Denmark.</p>
                                                            <h4 class="wp-block-heading">Payment information</h4>
                                                            <p>The buyer shall make all payments without deduction according to the payment terms stated on the invoice. If due payments are not received in time, NordicCell reserves the right to cancel or postpone further deliveries until payment has been received.</p>
                                                            <p>Bank information is stated on the invoice with either the DKK or EUR account to be used.</p>
                                                            <p>Bank information:</p>
                                                            <p>EUR Account:</p>
                                                            <p>Nordea Denmark</p>
                                                            <p>Account: 2252 – 5036313600</p>
                                                            <p>SWIFT:	NDEADKKK</p>
                                                            <p>Iban:	DK2320005036313600</p>
                                                            <p>DKK Account:</p>
                                                            <p>Nordea Denmark</p>
                                                            <p>Account: &nbsp;1726 – 0758945561</p>
                                                            <p>SWIFT:	NDEADKK</p>
                                                            <p>Iban:	DK7020000758945561	</p>
                                                            <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>

                                                        </div>
                                                        <p class="form-row validate-required woocommerce-validated">
                                                            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                                <input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" name="terms" id="terms" data-gtm-form-interact-field-id="0">
                                                                <span class="woocommerce-terms-and-conditions-checkbox-text">I have read and agree to the website <a href="https://nordiccell.com/terms-and-condictions/" class="woocommerce-terms-and-conditions-link" target="_blank">terms and conditions</a></span>&nbsp;<abbr class="required" title="required">*</abbr>
                                                            </label>
                                                            <input type="hidden" name="terms-field" value="1">
                                                        </p>
                                                    </div>


                                                    <button type="submit" class="button alt" name="woocommerce_checkout_place_order" value="Place order" data-value="Place order">Place order</button>

                                                    <input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="9842b0b1f0"><input type="hidden" name="_wp_http_referer" value="/?wc-ajax=update_order_review">	</div>
                                            </div>

                                        </div>

                                    </div></div>
                            </form>

                        </div>

                    </div>


                </article>






            </main>


        </div>

    </div>
@endsection
