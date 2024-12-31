<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>

    <div class="row" style="background:#f9f9f9">
        <div class="shop">
            <div class="shopcover">
                <div class="title">Checkout</div>
                <div class="detail">
                    <div class="ship">
                        <div class="text">
                            Credit Card Info for Subscription
                            <a href="#" id="addcreditcard"><i class="iconmoon icon-add"></i>Add Card</a>
                        </div>

                        <div class="list">
                            <label for="card1">
                                <input type="radio" id="card1" name="creditcard_reg" checked="">
                                <span><i class="iconmoon icon-done"></i></span>
                                <div class="content">
                                    <div>Wong Qian Shu</div>
                                    <div>************7896</div>
                                    <div>Expiry: 12/24</div>
                                </div>
                                <div class="edit"><i class="iconmoon icon-edit"></i></div>
                            </label>
                            <label for="card2">
                                <input type="radio" id="card2" name="creditcard_reg">
                                <span><i class="iconmoon icon-done"></i></span>
                                <div class="content">
                                    <div>Wong Qian Shu</div>
                                    <div>************7896</div>
                                    <div>Expiry: 12/24</div>
                                </div>
                                <div class="edit"><i class="iconmoon icon-edit"></i></div>
                            </label>
                        </div>

                        <div class="text">
                            Shipping Address<a href="#" id="addaddress"><i class="iconmoon icon-add"></i>Add Address</a>
                        </div>
                        <div class="list">
                            <label for="ad1">
                                <input type="radio" id="ad1" name="shipping" checked="">
                                <span><i class="iconmoon icon-done"></i></span>
                                <div class="content">
                                    <div>azan123 <span>(+60) 0123456789</span></div>
                                    <span>456456 456456 456456 <br>456456, 456456,
                                        Kelantan <br>Malaysia </span>
                                </div>
                                <div class="edit"><i class="iconmoon icon-edit"></i></div>
                            </label>
                            <label for="ad2">
                                <input type="radio" id="ad2" name="shipping">
                                <span><i class="iconmoon icon-done"></i></span>
                                <div class="content">
                                    <div>azan123 <span>(+60) 0123456789</span></div>
                                    <span>456456 456456 456456 <br>456456, 456456,
                                        Kelantan <br>Malaysia </span>
                                </div>
                                <div class="edit"><i class="iconmoon icon-edit"></i></div>
                            </label>
                        </div>
                        <div class="check">
                            <label for="check1">
                                <input type="checkbox" id="check1">
                                <span></span>
                                <div>YES, I want exclusive offers via SMS. By checking this box, you agree to receive
                                    recurring automated promotional and personalized marketing text messages (e.g. cart
                                    reminders) from Party8 at the cell number used when signing up.</div>
                            </label>
                            <label for="check2">
                                <input type="checkbox" id="check2">
                                <span></span>
                                <div>YES, I want order updates via SMS. Stay up to date on your purchases with order
                                    confirmation and s hipping confirmation messages.</div>
                            </label>
                        </div>
                    </div>
                    <div class="right">
                        <div class="text">Order Summary</div>
                        <div class="item-list">
                            <div class="item">
                                <div class="image"><img
                                        src="https://www.party8.my/images/product/a432a2a26fbd93b4074d37af4777e1ec.png">
                                </div>
                                <div class="content">
                                    <div>Party8 Vitamin Stick - Watermelon Ice</div>
                                    <span>Watermelon Ice </span>
                                    <span>Qty : 1</span>
                                    <span>Price : RM 60.00</span>
                                </div>
                            </div>

                            <input type="hidden" id="subtotal467" name="subtotal467" value="60">

                            <div class="item">
                                <div class="image"><img
                                        src="https://www.party8.my/images/product/93ae90e0eb577531c7c5050371001c72.png">
                                </div>
                                <div class="content">
                                    <div>Party8 Vitamin Stick - Pink Lemonade</div>
                                    <span>Pink Lemonade </span>
                                    <span>Qty : 1</span>
                                    <span>Price : RM 60.00</span>
                                </div>
                            </div>

                            <input type="hidden" id="subtotal173" name="subtotal173" value="60">

                        </div>
                        <div class="sumup">
                            <div class="row">
                                <div>Sub Total</div>
                                <span>RM59.00</span>
                            </div>
                            <div class="row">
                                <div>Discount</div>
                                <span>- RM10.00</span>
                            </div>
                            <div class="row">
                                <div>Shipping</div>
                                <span>RM10.00</span>
                            </div>
                            <div class="total">
                                <div>In Total</div>
                                <span>RM59.00</span>
                            </div>
                            <a href="#">Checkout Order</a>
                            <br>
                            <div class="continue_shopping">
                                <a href="https://www.party8.my/products.html">Continue Shopping</a>
                            </div>
                        </div>
                    </div>

                    <div class="clear-row"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="default-popup" id="voucher-popup">
        <div class="closethis">
            <span class="material-symbols-rounded"> close </span>
        </div>
        <div class="content">
            <div class="title">Select Voucher</div>
            <div class="voucher">
                <div class="search">
                    <a href="https://www.party8.my/redeem.html" target="_blank">Add Voucher</a>
                </div>
                <div class="list">
                    <div class="empty">
                        You have no vouchers available. <br>Click <a href="https://www.party8.my//redeem">here</a> if
                        you have redeem code
                    </div>
                    <div class="box">
                        <div class="image"><b>%</b></div>
                        <div class="content">
                            <div class="main">
                                10.00% off
                            </div>
                            <div class="sub"><span id="coupon1">aO1729649890bs</span></div>
                            <div class="note">Valid till : 18 Mar 2024 - 31 Aug 2024</div>
                            <div class="category">For Hangover Recovery Aid Only</div>
                        </div>
                        <div class="action"><span>Expired</span></div>
                        <div class="bar"></div>
                    </div>
                    <div class="box">
                        <div class="image"><b>%</b></div>
                        <div class="content">
                            <div class="main">
                                10.00% off
                            </div>
                            <div class="sub"><span id="coupon1">aO1729649890bs</span></div>
                            <div class="note">Valid till : 18 Mar 2024 - 31 Aug 2024</div>
                            <div class="category">For Hangover Recovery Aid Only</div>
                        </div>
                        <div class="action"><span>Expired</span></div>
                        <div class="bar"></div>
                    </div>
                    <div class="box">
                        <div class="image"><b>%</b></div>
                        <div class="content">
                            <div class="main">
                                10.00% off
                            </div>
                            <div class="sub"><span id="coupon1">aO1729649890bs</span></div>
                            <div class="note">Valid till : 18 Mar 2024 - 31 Aug 2024</div>
                            <div class="category">For Hangover Recovery Aid Only</div>
                        </div>
                        <div class="action"><span>Expired</span></div>
                        <div class="bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="default-popup" id="address-popup">
        <div class="closethis">
            <span class="material-symbols-rounded"> close </span>
        </div>
        <div class="content">
            <div class="title">Add Shipping Address</div>
            <form>
                <div class="form">
                    <div class="row">
                        <div>Full Name</div>
                        <input type="text" name="Name" required="">
                    </div>
                    <div class="row">
                        <div>Mobile</div>
                        <input id="mobileno_code" name="MobileNo" type="tel" required>
                    </div>

                    <div class="row">
                        <div>Country</div>
                        <select name="country" id="country" onchange="changemake(this.value);" required="">
                            <option value="" selected="" hidden="">Select Country</option>
                            <option value="MY">Malaysia</option>
                            <option value="SG">Singapore</option>
                            <option value="ID">Indonesia</option>
                            <option value="TH">Thailand</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Aland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BQ">Bonaire,Saint Eustatius and Saba</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CT">Canton and Enderbury Islands</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo, the Democratic Republic of the</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Cote D Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CW">Curacao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern and Antarctic Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard Island and Mcdonald Islands</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran, Islamic Republic of</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="XK">Kosovo</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao Peoples Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libyan Arab Jamahiriya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="FX">Metropolitan France</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia, Federated States of</option>
                            <option value="MD">Moldova, Republic of</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="AN">Netherlands Antilles</option>
                            <option value="NT">Neutral Zone</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="KP">North Korea</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PC">Pacific Islands Trust Territory</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestinian Territory, Occupied</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Reunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="Bl">Saint Bartheley</option>
                            <option value="SH">Saint Helena</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="MF">Saint Martin</option>
                            <option value="PM">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="CS">Serbia and Montenegro</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="KR">South Korea</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan, Province of China</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="SU">Union of Soviet Socialist Republics</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="PU">United States Miscellaneous Pacific Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VA">Vatican City</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands, British</option>
                            <option value="VI">Virgin Islands, U.s.</option>
                            <option value="WK">Wake Island</option>
                            <option value="WF">Wallis and Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                    </div>
                    <div class="row">
                        <div>Unit No. (Optional)</div>
                        <input type="text" name="unit">
                    </div>
                    <div class="row">
                        <div>Street Address 1</div>
                        <input type="text" name="Address1" required="">
                    </div>
                    <div class="row">
                        <div>Street Address 2</div>
                        <input type="text" name="Address2">
                    </div>
                    <div class="row">
                        <div>City</div>
                        <input type="text" name="City" required="">
                    </div>
                    <div class="row">
                        <div>State</div>
                        <input type="text" name="input_state" id="input_state">
                        <select name="select_state" id="select_state" style="display:none;">
                            <option value="" selected="" hidden="">Select State</option>
                            <option value="07">Johor</option>
                            <option value="02">Kedah</option>
                            <option value="12">Kelantan</option>
                            <option value="06">Kuala Lumpur</option>
                            <option value="15">Labuan</option>
                            <option value="08">Melaka</option>
                            <option value="09">Negeri Sembilan</option>
                            <option value="10">Pahang</option>
                            <option value="04">Perak</option>
                            <option value="01">Perlis</option>
                            <option value="03">Pulau Pinang</option>
                            <option value="16">Putrajaya</option>
                            <option value="13">Sabah</option>
                            <option value="14">Sarawak</option>
                            <option value="05">Selangor</option>
                            <option value="11">Terengganu</option>
                        </select>
                    </div>
                    <div class="row">
                        <div>Zip/Post Code</div>
                        <input type="text" name="PostCode" required="">
                    </div>
                </div>
                <div class="btn">
                    <input type="submit" value="Confirm">
                </div>
            </form>
        </div>
    </div>


    <?php include 'footer.php'; ?>


    <?php include 'page-script.php'; ?>

</body>

</html>