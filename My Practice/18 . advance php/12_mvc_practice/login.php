<script type="text/javascript">
	$(document).ready(function(){
		$("#frm1").bValidator();
	})
</script>

 <div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Existing Customers</h3>
        	<p>Sign in with the form below.</p>
        	<form action="hello" method="get" id="member">
                	<input name="Domain" type="text" value="Username" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
                    <input name="Domain" type="password" value="Password" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                 </form>
                 <p class="note">If you forgot your passoword just enter your email and click <a href="#">here</a></p>
                    <div class="buttons"><div><button class="grey">Sign In</button></div></div>
                    </div>
    	<div class="register_account">
    		<h3>Register New Account</h3>
    		<form method="post" id="frm1">
		   			 <table>
		   				<tbody><tr><td><div><input type="text" name="fname" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" data-bvalidator="required,alpha"></div>

		    			<div><input type="text" name="lname" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}" data-bvalidator="required,alpha"></div>

						<div><input type="text" name="dob" value="Date Of Birth" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Date Of Birth';}" data-bvalidator="required"></div>
						
		    			<div><input type="text" name="email" value="E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-Mail';}"data-bvalidator="required,email"></div>

		    			<div><input type="text" name="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"data-bvalidator="required,minlen[4],maxlen[15]"></div></td>



		    			<td><div><input type="text" name="address" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" data-bvalidator="required"></div>

		    			<div><select id="country" name="country" onchange="change_country(this.value)" data-bvalidator="required">
							<option value="null">Select a Country</option>         
							<option value="AX">Åland Islands</option>
							<option value="AF">Afghanistan</option>
							<option value="AL">Albania</option>
							<option value="DZ">Algeria</option>
							<option value="AS">American Samoa</option>
							<option value="AD">Andorra</option>
							<option value="AO">Angola</option>
							<option value="AI">Anguilla</option>
							<option value="AQ">Antarctica</option>
							<option value="AG">Antigua And Barbuda</option>
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
							<option value="BA">Bosnia and Herzegovina</option>
							<option value="BW">Botswana</option>
							<option value="BV">Bouvet Island</option>
							<option value="BR">Brazil</option>
							<option value="IO">British Indian Ocean Territory</option>
							<option value="BN">Brunei</option>
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
							<option value="CD">Congo, Democratic Republic</option>
							<option value="CK">Cook Islands</option>
							<option value="CR">Costa Rica</option>
							<option value="CI">Cote D'Ivoire (Ivory Coast)</option>
							<option value="HR">Croatia (Hrvatska)</option>
							<option value="CU">Cuba</option>
							<option value="CY">Cyprus</option>
							<option value="CZ">Czech Republic</option>
							<option value="DK">Denmark</option>
							<option value="DJ">Djibouti</option>
							<option value="DM">Dominica</option>
							<option value="DO">Dominican Republic</option>
							<option value="TP">East Timor</option>
							<option value="EC">Ecuador</option>
							<option value="EG">Egypt</option>
							<option value="SV">El Salvador</option>
							<option value="GQ">Equatorial Guinea</option>
							<option value="ER">Eritrea</option>
							<option value="EE">Estonia</option>
							<option value="ET">Ethiopia</option>
							<option value="FK">Falkland Islands (Islas Malvinas)</option>
							<option value="FO">Faroe Islands</option>
							<option value="FJ">Fiji Islands</option>
							<option value="FI">Finland</option>
							<option value="FR">France</option>
							<option value="FX">France, Metropolitan</option>
							<option value="GF">French Guiana</option>
							<option value="PF">French Polynesia</option>
							<option value="TF">French Southern Territories</option>
							<option value="GA">Gabon</option>
							<option value="GM">Gambia, The</option>
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
							<option value="HM">Heard and McDonald Islands</option>
							<option value="HN">Honduras</option>
							<option value="HK">Hong Kong S.A.R.</option>
							<option value="HU">Hungary</option>
							<option value="IS">Iceland</option>
							<option value="IN">India</option>
							<option value="ID">Indonesia</option>
							<option value="IR">Iran</option>
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
							<option value="KR">Korea</option>
							<option value="KP">Korea, North</option>
							<option value="KW">Kuwait</option>
							<option value="KG">Kyrgyzstan</option>
							<option value="LA">Laos</option>
							<option value="LV">Latvia</option>
							<option value="LB">Lebanon</option>
							<option value="LS">Lesotho</option>
							<option value="LR">Liberia</option>
							<option value="LY">Libya</option>
							<option value="LI">Liechtenstein</option>
							<option value="LT">Lithuania</option>
							<option value="LU">Luxembourg</option>
							<option value="MO">Macau S.A.R.</option>
							<option value="MK">Macedonia</option>
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
							<option value="FM">Micronesia</option>
							<option value="MD">Moldova</option>
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
							<option value="PG">Papua new Guinea</option>
							<option value="PY">Paraguay</option>
							<option value="PE">Peru</option>
							<option value="PH">Philippines</option>
							<option value="PN">Pitcairn Island</option>
							<option value="PL">Poland</option>
							<option value="PT">Portugal</option>
							<option value="PR">Puerto Rico</option>
							<option value="QA">Qatar</option>
							<option value="RE">Reunion</option>
							<option value="RO">Romania</option>
							<option value="RU">Russia</option>
							<option value="RW">Rwanda</option>
							<option value="SH">Saint Helena</option>
							<option value="KN">Saint Kitts And Nevis</option>
							<option value="LC">Saint Lucia</option>
							<option value="PM">Saint Pierre and Miquelon</option>
							<option value="VC">Saint Vincent And The Grenadines</option>
							<option value="WS">Samoa</option>
							<option value="SM">San Marino</option>
							<option value="ST">Sao Tome and Principe</option>
							<option value="SA">Saudi Arabia</option>
							<option value="SN">Senegal</option>
		         </select></div>

				 <div><select id="state" name="state" onchange="change_state(this.value)" data-bvalidator="required">
							<option value="null">Select a State</option>         
							<option value="AN">Andaman and Nicobar Islands</option>
							<option value="AP">Andhra Pradesh</option>
							<option value="AR">Arunachal Pradesh</option>
							<option value="AS">Assam</option>
							<option value="BR">Bihar</option>
							<option value="CG">Chandigarh</option>
							<option value="CH">Chhattisgarh<option>
							<option value="DN">Dadra and Nagar Haveli</option>
							<option value="DD">Daman and Diu</option>
							<option value="DL">Delhi</option>
							<option value="GA">Goa</option>
							<option value="GJ">Gujarat</option>
							<option value="HR">Haryana</option>
							<option value="HP">Himachal Pradesh</option>
							<option value="JK">Jammu and Kashmir</option>
							<option value="JH">Jharkhand</option>
							<option value="KA">Karnataka</option>
							<option value="KL">Kerala</option>
							<option value="LA">Ladakh</option>
							<option value="LD">Lakshadweep</option>
							<option value="MP">Madhya Pradesh</option>
							<option value="MH">Maharashtra</option>
							<option value="MN">Manipur</option>
							<option value="ML">Meghalaya</option>
							<option value="MZ">Mizoram</option>
							<option value="NL">Nagaland</option>
							<option value="OR">Odisha</option>
							<option value="PY">Puducherry</option>
							<option value="PB">Punjab</option>
							<option value="RJ">Rajasthan</option>
							<option value="SK">Sikkim</option>
							<option value="TN">Tamil Nadu</option>
							<option value="TS">Telangana</option>
							<option value="TR">Tripura</option>
							<option value="UP">Uttar Pradesh</option>
							<option value="UK">Uttarakhand</option>
							<option value="WB">West Bengal</option>
		         </select></div>

		          <div><input type="text" name="city" value="City" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'City';}" data-bvalidator="required"></div>
		           <div>

				   <div><input type="text" name="phone" value="Phone Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone Number';}" data-bvalidator="required,minlen[10],maxlen[10],digit"></div>
		           <div>

		           
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><button class="grey">Create Account</button></div></div>
		    <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
</div>
   