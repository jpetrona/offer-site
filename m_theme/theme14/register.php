<?php
	if(isset($_POST['email'])&&$_POST['email']!="")
	{	
		$mail_register=file_get_contents("./mail.txt");
		$mail_register.="||".addslashes($_POST['email']);
		file_put_contents("./mail.txt",$mail_register);
		
		?>
		<!DOCTYPE html>
<!-- saved from url=(0042)http://www.AdsMoblead.com/auth/signUpThank -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <link rel="stylesheet" type="text/css" href="<?php echo $path;?>/data/autorization.css">
<script type="text/javascript" src="<?php echo $path;?>/data/jquery.min.js"></script>
<title>AdsMoblead</title>
    <link rel="icon" href="http://www.AdsMoblead.com/images/index/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="layout-columns">
    <div class="main">
        <div class="wrapper-cols">
            <div class="col-sidebar">
                <a href="http://www.AdsMoblead.com/" class="logo" title="AdsMoblead">
                    AdsMoblead
                </a>
                <h2 class="slogan">
                    The RIGHT PEOPLE<br>
                    get the RIGHT MESSAGE<br>
                    at the RIGHT TIME!
                </h2>
            </div>
            <div class="col-main">
                <div class="wrapper-form">
    <div class="head">
        <h1 class="title">
            Thank you for registering!
        </h1>
    </div>
    <div class="text-autorization">
        <h2 class="title">
            Email has been sent to activate you account.
        </h2>
        <p>
            We have sent an email confirmation to <span class="email">
			<?php echo addslashes($_POST['email']);?></span>.
        </p>
        <p>This email will contain a link to confirm your email address. Once you click that link, your account will be activated and you will be able to sign in to your account.</p>
        <p>If you need further help, please <a href="./index.php#contact">contact us</a>.</p>
        <p>If you do not see an email from us, please <strong>check your spam folder.</strong></p>
    </div>
</div>            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="main">
        2015 © AdsMoblead. All rights reserved.
    </div>
</div>

<div></div></body></html>
		<?php
	}
	else
	{
?>

<!DOCTYPE html>
<!-- saved from url=(0037)http://www.AdsMoblead.com/auth/signUp -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <link rel="stylesheet" type="text/css" href="<?php echo $path;?>/data/autorization.css">
<script type="text/javascript" src="<?php echo $path;?>/data/jquery.min.js"></script>
<title>AdsMoblead</title>
    <link rel="icon" href="http://www.AdsMoblead.com/images/index/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="layout-columns">
    <div class="main">
        <div class="wrapper-cols">
            <div class="col-sidebar">
                <a href="http://www.AdsMoblead.com/" class="logo" title="AdsMoblead">
                    AdsMoblead
                </a>
                <h2 class="slogan">
                    The RIGHT PEOPLE<br>
                    get the RIGHT MESSAGE<br>
                    at the RIGHT TIME!
                </h2>
            </div>
            <div class="col-main">
                <div class="wrapper-form">
    <div class="head">
        <h1 class="title">Start Your 30 Day Free Trial</h1>
        <div class="head-nav">
            <span class="label">or</span>
            <a href="http://www.adsmoblead.com/index.php?login" class="btn">Log in</a>
        </div>
    </div>

    <!-- FORM BEGIN -->
    <form class="form form-autorization" id="signUpForm" action="./index.php?register" method="post">
        <!-- first_name FIELD -->
        <div class="form-group">
            <label class="control-label required" for="UserProfile_first_name">First name</label>            <div class="form-control-wrapper">
                <input class="form-control" name="UserProfile[first_name]" id="UserProfile_first_name" type="text">                            </div>
        </div>

        <!-- last_name FIELD -->
        <div class="form-group">
            <label class="control-label required" for="UserProfile_last_name">Last name</label>            <div class="form-control-wrapper">
                <input class="form-control" name="UserProfile[last_name]" id="UserProfile_last_name" type="text">                            </div>
        </div>

        <!-- email FIELD -->
        <div class="form-group">
            <label class="control-label required" for="UserProfile_email">Email</label>            <div class="form-control-wrapper">
                <input class="form-control" name="email" id="UserProfile_email" type="text" maxlength="100">                            </div>
        </div>



        <!-- company_name FIELD -->
        <div class="form-group">
            <label class="control-label required" for="UserProfile_company_name">Company name</label>            <div class="form-control-wrapper">
                <input class="form-control" name="UserProfile[company_name]" id="UserProfile_company_name" type="text">                            </div>
        </div>

        <!-- country FIELD -->
        <div class="form-group">
            <label class="control-label required" for="UserProfile_country">Country</label>            <div class="form-control-wrapper">
                
                <select class="form-control" name="UserProfile[country]" id="UserProfile_country">
<option value="" selected="selected"></option>
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
<option value="BO">Bolivia, Plurinational State of</option>
<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
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
<option value="CI">Côte d'Ivoire</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CW">Curaçao</option>
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
<option value="TF">French Southern Territories</option>
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
<option value="HM">Heard Island and McDonald Islands</option>
<option value="VA">Holy See (Vatican City State)</option>
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
<option value="KP">Korea, Democratic People's Republic of</option>
<option value="KR">Korea, Republic of</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Lao People's Democratic Republic</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macao</option>
<option value="MK">Macedonia, the former Yugoslav Republic of</option>
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
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
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
<option value="RE">Réunion</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="BL">Saint Barthélemy</option>
<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="MF">Saint Martin (French part)</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and the Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome and Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SX">Sint Maarten (Dutch part)</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="GS">South Georgia and the South Sandwich Islands</option>
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
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States</option>
<option value="UM">United States Minor Outlying Islands</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela, Bolivarian Republic of</option>
<option value="VN">Viet Nam</option>
<option value="VG">Virgin Islands, British</option>
<option value="VI">Virgin Islands, U.S.</option>
<option value="WF">Wallis and Futuna</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
</select>                            </div>
        </div>

        <!-- phone FIELD -->
        <div class="form-group">
            <label class="control-label required" for="UserProfile_phone">Phone</label>            <div class="form-control-wrapper">
                <input class="form-control" name="UserProfile[phone]" id="UserProfile_phone" type="text" maxlength="30">                            </div>
        </div>

        <!-- password FIELD -->
        <div class="form-group">
            <label class="control-label required" for="UserProfile_password">Password</label>            <div class="form-control-wrapper">
                <input class="form-control" name="UserProfile[password]" id="UserProfile_password" type="password" maxlength="255">                                <div class="form-control-wrapper lb">Must be at least 4 characters long</div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label required" for="UserProfile_password_confirm">Password confirm</label>            <div class="form-control-wrapper">
                <input class="form-control" name="UserProfile[password_confirm]" id="UserProfile_password_confirm" type="password">                            </div>
        </div>

        <!-- accept-terms FIELD -->
        <div class="form-group form-group-terms">
            <label class="rch-label">
                <span class="rch">
                    <input id="accept-terms" type="checkbox" tabindex="8">
                    <i></i>
                </span>
                <span class="lb">By checking this box I agree to the <a href="#" tabindex="9">Terms &amp; Conditions</a></span>
            </label>
            <div class="alert-message hidden"></div>
        </div>
        <!-- accept-terms FIELD END -->

        <!-- SUBMIT -->
        <div class="form-group form-group-buttons">
            <button type="submit" class="btn btn-large btn-primary" tabindex="10" title="Create my account">
                Create my account
            </button>
        </div>
        <!-- SUBMIT END -->

    </form>
    <!-- FORM END -->
</div>

<script>
    $(function() {
        $('#accept-terms').on('click', function() {
            if( $('#accept-terms').prop("checked")) {
                $(this).closest('form').find('button[type=submit]').attr('disabled', false);
            }
        });

        $('#signUpForm button[type=submit]').click(function() {
            if (!$('#accept-terms').prop("checked")) {
                $('#accept-terms').focus();
                return false;
            }
        });
    });
</script>            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="main">
        2016 © AdsMoblead. All rights reserved.
    </div>
</div>

<div></div></body></html>
<?php
	}
?>