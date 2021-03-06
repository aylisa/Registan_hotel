
<?php

    require_once '../Controllers/CheckRoom.php';

    if (isset($_POST["check"])){
        $rooms = CheckRoom::render();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registan Plaza</title>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href="../../assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/css/bootstrapValidator.css" rel="stylesheet">
  <link href="../../assets/css/bootstrapValidator.min.css" rel="stylesheet">
  <link href="../../assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <link href="../../assets/css/flexslider.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/jquery-ui.css" />
  <link href="../../assets/css/loginStyle.css" rel="stylesheet">
  <link href="../../assets/css/main-style.css" rel="stylesheet">
  <style>

  


  </style>


  </head>
  <body class="gray-bg">
 	<nav class="navbar navbar-inverse navbar-fixed-top">
  	<div class="header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-4 col-md-4 col-sm-2 siteNameContainer"><a href="index.php">
  					<img src="../../assets/imgs/logo.jpg" height="8%" width="7%" style="padding-bottom: 10px; margin-right: 3px" >
  					<span class="siteName">Registan Plaza</span>
  				</a>
  				</div>
	  			<div class="col-lg-8 col-md-8 col-sm-9">
	  				<div class="menu_header">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="navBar">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li> <a href="#rooms_4">Room</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Login </a>
							<ul id="login-dp" class="dropdown-menu right" >
								<li>
									 <div class="row">
										<div class="col-md-12">

											<img src="../../assets/imgs/admin1.png"  class="img-circle" id="admin"> <br> <br>

										 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
											<div class="form-group">
											 <input type="text" class="form-control" placeholder="Username" required>
											</div>
											<div class="form-group">
												 <label class="sr-only" for="inputPassword">Password</label>
												 <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>

											</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>

								 		 </form>
										</div>

					 				</div>
								</li>
							</ul>
							</li>

						</ul>

					 </nav>
				   </div>
	  			</div>
  			</div>
  		</div>
       </nav>


<div class="container" >
	<div class="section-margin-top" style="margin-bottom: 10px;">
			<div class="row">
				<div class="section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="section-title"> Available Rooms</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
				</div>
			</div>
			<div class="row">

                <?php
                foreach ($rooms as $room) {
                    echo " <a onclick=\"showReg()\" data-target = \"#LuxeRoom\" data-toggle=\"modal\">
				<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12\">
					<div class=\"home-box-2 availableRoom\">
						<img src=\"../../assets/imgs/luxe.jpg\" alt=\"image\" class=\"img-responsive\">
						<h3>$room->type</h3>
						<p class=\"date1\">Registan Plaza</p>

					</div>
				</div>
				</a> ";

                }

                ?>

			</div>
	</div>

<form class="well form-horizontal" action="" method="post"  id="register_form">
<fieldset>
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>
	<div class="form-group">
	  <label class="col-md-4 control-label">Room Number</label>
	  <div class="col-md-4 inputGroupContainer">
	  <div class="input-group">
	  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
	  <label  name="first_name" placeholder="First Name" class="form-control"  type="text">Room number</label>
	    </div>
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-md-4 control-label">Type</label>
	  <div class="col-md-4 inputGroupContainer">
	  <div class="input-group">
	  <span class="input-group-addon"><i class="glyphicon glyphicon-align-right"></i></span>
	  <label  name="first_name" placeholder="First Name" class="form-control"  type="text"> Type</label>
	    </div>
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-md-4 control-label">First Name</label>
	  <div class="col-md-4 inputGroupContainer">
	  <div class="input-group">
	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
	    </div>
	  </div>
	</div>


	<div class="form-group">
	  <label class="col-md-4 control-label" >Last Name</label>
	    <div class="col-md-4 inputGroupContainer">
	    <div class="input-group">
	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
	    </div>
	  </div>
	</div>


	<div class="form-group">
	  <label class="col-md-4 control-label" >Address</label>
	    <div class="col-md-4 inputGroupContainer">
	    <div class="input-group">
	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
	    </div>
	  </div>
	</div>
  <div class="form-group">
  	<label class="col-md-4 control-label">Country </label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="country" class="form-control selectpicker">
      <option value="" selected disabled >Select your country</option>
	<option value="AFG">Afghanistan</option>
	<option value="ALA">Åland Islands</option>
	<option value="ALB">Albania</option>
	<option value="DZA">Algeria</option>
	<option value="ASM">American Samoa</option>
	<option value="AND">Andorra</option>
	<option value="AGO">Angola</option>
	<option value="AIA">Anguilla</option>
	<option value="ATA">Antarctica</option>
	<option value="ATG">Antigua and Barbuda</option>
	<option value="ARG">Argentina</option>
	<option value="ARM">Armenia</option>
	<option value="ABW">Aruba</option>
	<option value="AUS">Australia</option>
	<option value="AUT">Austria</option>
	<option value="AZE">Azerbaijan</option>
	<option value="BHS">Bahamas</option>
	<option value="BHR">Bahrain</option>
	<option value="BGD">Bangladesh</option>
	<option value="BRB">Barbados</option>
	<option value="BLR">Belarus</option>
	<option value="BEL">Belgium</option>
	<option value="BLZ">Belize</option>
	<option value="BEN">Benin</option>
	<option value="BMU">Bermuda</option>
	<option value="BTN">Bhutan</option>
	<option value="BOL">Bolivia, Plurinational State of</option>
	<option value="BES">Bonaire, Sint Eustatius and Saba</option>
	<option value="BIH">Bosnia and Herzegovina</option>
	<option value="BWA">Botswana</option>
	<option value="BVT">Bouvet Island</option>
	<option value="BRA">Brazil</option>
	<option value="IOT">British Indian Ocean Territory</option>
	<option value="BRN">Brunei Darussalam</option>
	<option value="BGR">Bulgaria</option>
	<option value="BFA">Burkina Faso</option>
	<option value="BDI">Burundi</option>
	<option value="KHM">Cambodia</option>
	<option value="CMR">Cameroon</option>
	<option value="CAN">Canada</option>
	<option value="CPV">Cape Verde</option>
	<option value="CYM">Cayman Islands</option>
	<option value="CAF">Central African Republic</option>
	<option value="TCD">Chad</option>
	<option value="CHL">Chile</option>
	<option value="CHN">China</option>
	<option value="CXR">Christmas Island</option>
	<option value="CCK">Cocos (Keeling) Islands</option>
	<option value="COL">Colombia</option>
	<option value="COM">Comoros</option>
	<option value="COG">Congo</option>
	<option value="COD">Congo, the Democratic Republic of the</option>
	<option value="COK">Cook Islands</option>
	<option value="CRI">Costa Rica</option>
	<option value="CIV">Côte d'Ivoire</option>
	<option value="HRV">Croatia</option>
	<option value="CUB">Cuba</option>
	<option value="CUW">Curaçao</option>
	<option value="CYP">Cyprus</option>
	<option value="CZE">Czech Republic</option>
	<option value="DNK">Denmark</option>
	<option value="DJI">Djibouti</option>
	<option value="DMA">Dominica</option>
	<option value="DOM">Dominican Republic</option>
	<option value="ECU">Ecuador</option>
	<option value="EGY">Egypt</option>
	<option value="SLV">El Salvador</option>
	<option value="GNQ">Equatorial Guinea</option>
	<option value="ERI">Eritrea</option>
	<option value="EST">Estonia</option>
	<option value="ETH">Ethiopia</option>
	<option value="FLK">Falkland Islands (Malvinas)</option>
	<option value="FRO">Faroe Islands</option>
	<option value="FJI">Fiji</option>
	<option value="FIN">Finland</option>
	<option value="FRA">France</option>
	<option value="GUF">French Guiana</option>
	<option value="PYF">French Polynesia</option>
	<option value="ATF">French Southern Territories</option>
	<option value="GAB">Gabon</option>
	<option value="GMB">Gambia</option>
	<option value="GEO">Georgia</option>
	<option value="DEU">Germany</option>
	<option value="GHA">Ghana</option>
	<option value="GIB">Gibraltar</option>
	<option value="GRC">Greece</option>
	<option value="GRL">Greenland</option>
	<option value="GRD">Grenada</option>
	<option value="GLP">Guadeloupe</option>
	<option value="GUM">Guam</option>
	<option value="GTM">Guatemala</option>
	<option value="GGY">Guernsey</option>
	<option value="GIN">Guinea</option>
	<option value="GNB">Guinea-Bissau</option>
	<option value="GUY">Guyana</option>
	<option value="HTI">Haiti</option>
	<option value="HMD">Heard Island and McDonald Islands</option>
	<option value="VAT">Holy See (Vatican City State)</option>
	<option value="HND">Honduras</option>
	<option value="HKG">Hong Kong</option>
	<option value="HUN">Hungary</option>
	<option value="ISL">Iceland</option>
	<option value="IND">India</option>
	<option value="IDN">Indonesia</option>
	<option value="IRN">Iran, Islamic Republic of</option>
	<option value="IRQ">Iraq</option>
	<option value="IRL">Ireland</option>
	<option value="IMN">Isle of Man</option>
	<option value="ISR">Israel</option>
	<option value="ITA">Italy</option>
	<option value="JAM">Jamaica</option>
	<option value="JPN">Japan</option>
	<option value="JEY">Jersey</option>
	<option value="JOR">Jordan</option>
	<option value="KAZ">Kazakhstan</option>
	<option value="KEN">Kenya</option>
	<option value="KIR">Kiribati</option>
	<option value="PRK">Korea, Democratic People's Republic of</option>
	<option value="KOR">Korea, Republic of</option>
	<option value="KWT">Kuwait</option>
	<option value="KGZ">Kyrgyzstan</option>
	<option value="LAO">Lao People's Democratic Republic</option>
	<option value="LVA">Latvia</option>
	<option value="LBN">Lebanon</option>
	<option value="LSO">Lesotho</option>
	<option value="LBR">Liberia</option>
	<option value="LBY">Libya</option>
	<option value="LIE">Liechtenstein</option>
	<option value="LTU">Lithuania</option>
	<option value="LUX">Luxembourg</option>
	<option value="MAC">Macao</option>
	<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
	<option value="MDG">Madagascar</option>
	<option value="MWI">Malawi</option>
	<option value="MYS">Malaysia</option>
	<option value="MDV">Maldives</option>
	<option value="MLI">Mali</option>
	<option value="MLT">Malta</option>
	<option value="MHL">Marshall Islands</option>
	<option value="MTQ">Martinique</option>
	<option value="MRT">Mauritania</option>
	<option value="MUS">Mauritius</option>
	<option value="MYT">Mayotte</option>
	<option value="MEX">Mexico</option>
	<option value="FSM">Micronesia, Federated States of</option>
	<option value="MDA">Moldova, Republic of</option>
	<option value="MCO">Monaco</option>
	<option value="MNG">Mongolia</option>
	<option value="MNE">Montenegro</option>
	<option value="MSR">Montserrat</option>
	<option value="MAR">Morocco</option>
	<option value="MOZ">Mozambique</option>
	<option value="MMR">Myanmar</option>
	<option value="NAM">Namibia</option>
	<option value="NRU">Nauru</option>
	<option value="NPL">Nepal</option>
	<option value="NLD">Netherlands</option>
	<option value="NCL">New Caledonia</option>
	<option value="NZL">New Zealand</option>
	<option value="NIC">Nicaragua</option>
	<option value="NER">Niger</option>
	<option value="NGA">Nigeria</option>
	<option value="NIU">Niue</option>
	<option value="NFK">Norfolk Island</option>
	<option value="MNP">Northern Mariana Islands</option>
	<option value="NOR">Norway</option>
	<option value="OMN">Oman</option>
	<option value="PAK">Pakistan</option>
	<option value="PLW">Palau</option>
	<option value="PSE">Palestinian Territory, Occupied</option>
	<option value="PAN">Panama</option>
	<option value="PNG">Papua New Guinea</option>
	<option value="PRY">Paraguay</option>
	<option value="PER">Peru</option>
	<option value="PHL">Philippines</option>
	<option value="PCN">Pitcairn</option>
	<option value="POL">Poland</option>
	<option value="PRT">Portugal</option>
	<option value="PRI">Puerto Rico</option>
	<option value="QAT">Qatar</option>
	<option value="REU">Réunion</option>
	<option value="ROU">Romania</option>
	<option value="RUS">Russian Federation</option>
	<option value="RWA">Rwanda</option>
	<option value="BLM">Saint Barthélemy</option>
	<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KNA">Saint Kitts and Nevis</option>
	<option value="LCA">Saint Lucia</option>
	<option value="MAF">Saint Martin (French part)</option>
	<option value="SPM">Saint Pierre and Miquelon</option>
	<option value="VCT">Saint Vincent and the Grenadines</option>
	<option value="WSM">Samoa</option>
	<option value="SMR">San Marino</option>
	<option value="STP">Sao Tome and Principe</option>
	<option value="SAU">Saudi Arabia</option>
	<option value="SEN">Senegal</option>
	<option value="SRB">Serbia</option>
	<option value="SYC">Seychelles</option>
	<option value="SLE">Sierra Leone</option>
	<option value="SGP">Singapore</option>
	<option value="SXM">Sint Maarten (Dutch part)</option>
	<option value="SVK">Slovakia</option>
	<option value="SVN">Slovenia</option>
	<option value="SLB">Solomon Islands</option>
	<option value="SOM">Somalia</option>
	<option value="ZAF">South Africa</option>
	<option value="SGS">South Georgia and the South Sandwich Islands</option>
	<option value="SSD">South Sudan</option>
	<option value="ESP">Spain</option>
	<option value="LKA">Sri Lanka</option>
	<option value="SDN">Sudan</option>
	<option value="SUR">Suriname</option>
	<option value="SJM">Svalbard and Jan Mayen</option>
	<option value="SWZ">Swaziland</option>
	<option value="SWE">Sweden</option>
	<option value="CHE">Switzerland</option>
	<option value="SYR">Syrian Arab Republic</option>
	<option value="TWN">Taiwan, Province of China</option>
	<option value="TJK">Tajikistan</option>
	<option value="TZA">Tanzania, United Republic of</option>
	<option value="THA">Thailand</option>
	<option value="TLS">Timor-Leste</option>
	<option value="TGO">Togo</option>
	<option value="TKL">Tokelau</option>
	<option value="TON">Tonga</option>
	<option value="TTO">Trinidad and Tobago</option>
	<option value="TUN">Tunisia</option>
	<option value="TUR">Turkey</option>
	<option value="TKM">Turkmenistan</option>
	<option value="TCA">Turks and Caicos Islands</option>
	<option value="TUV">Tuvalu</option>
	<option value="UGA">Uganda</option>
	<option value="UKR">Ukraine</option>
	<option value="ARE">United Arab Emirates</option>
	<option value="GBR">United Kingdom</option>
	<option value="USA">United States</option>
	<option value="UMI">United States Minor Outlying Islands</option>
	<option value="URY">Uruguay</option>
	<option value="UZB">Uzbekistan</option>
	<option value="VUT">Vanuatu</option>
	<option value="VEN">Venezuela, Bolivarian Republic of</option>
	<option value="VNM">Viet Nam</option>
	<option value="VGB">Virgin Islands, British</option>
	<option value="VIR">Virgin Islands, U.S.</option>
	<option value="WLF">Wallis and Futuna</option>
	<option value="ESH">Western Sahara</option>
	<option value="YEM">Yemen</option>
	<option value="ZMB">Zambia</option>
	<option value="ZWE">Zimbabwe</option>
	</select>
 	 </div>
	</div>
</div>


	<div class="form-group">
	  <label class="col-md-4 control-label">E-Mail</label>
	    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
	    	    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
	  			<input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
	    	</div>
	  	</div>
	</div>

	<div class="form-group">
	  <label class="col-md-4 control-label">Contact No.</label>
	    <div class="col-md-4 inputGroupContainer">
	    <div class="input-group">
	        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
	  		<input name="contact_no"  class="form-control" type="text">
	    </div>
	  </div>
	</div>

	 <div class="form-group">
	  <label class="col-md-4 control-label">Credit Card Name </label>
	    <div class="col-md-4 inputGroupContainer">
	    <div class="input-group">
	        <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
	  <input name="card_name" placeholder="" class="form-control" type="text">
	    </div>
	  </div>
	</div>

	  <div class="form-group">
	  <label class="col-md-4 control-label">Card Holder Name</label>
	    <div class="col-md-4 inputGroupContainer">
	    <div class="input-group">
	        <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
	  <input name="holder_name" placeholder="" class="form-control" type="text">
	    </div>
	  </div>
	</div>

	  <div class="form-group">
	  <label class="col-md-4 control-label">Card Number</label>
	    <div class="col-md-4 inputGroupContainer">
	    <div class="input-group">
	        <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
	  <input name="card_num" class="form-control" type="text">
	    </div>
	  </div>
	</div>

	  <div class="form-group">
	  <label class="col-md-4 control-label">CVC </label>
	    <div class="col-md-4 inputGroupContainer">
	    <div class="input-group">
	        <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
	  <input name="card_cvc" class="form-control" type="text">
	    </div>
	  </div>
	</div>

	<div class="form-group">
	    <label class="col-md-4 control-label">Expire Date </label>
	        <div class='col-md-4 inputGroupContainer'>
	                <div class='input-group date' id='datepicker'>
	                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
	                    <input class="form-control" name="card_expiry" type="text"  onfocus="this.value = '';"  required="" />
	                    </div>
	     </div>
	</div>

   <!-- </div>
</div>

</div> -->

<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<div class="container">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" id="submit_button" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>
	<footer class="black-bg">
		<div class="container">
			<div class="row">
				<p class="addressFooter">Copyright &copy; 2017 Registan Plaza

                </p>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="../assets/js/jquery-1.11.2.min.js"></script>
  	<script type="text/javascript" src="../assets/js/moment.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrapValidator.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrapValidator.min.js"></script>
	<script type="text/javascript" src="../assets/js/navbarShrink.js"></script>
	<script type="text/javascript" src="../assets/js/reg.js"></script>


	<script>
		$('#datepicker').click(function() {
			$('#datepicker').datetimepicker({
            	format: 'MM/DD/YYYY'
            });
  		  $('#datepicker').datetimepicker('show');
	$("#datetimepicker1").on("dp.change", function (e) {
    $('#datetimepicker2').data("DateTimePicker").setMinDate(e.date);
});

	});


</script>


 </body>
 </html>
