<?php
    include 'query.php';
    $user_obj = new User();
    $user_list = $user_obj->user_list();
?>  

<?php

if (isset($_POST['create_user'])) {
    $user_obj->addUser($_POST);
}
?>

<html lang="en">
<head>
    <title>simplePHPForm</title>

    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #222536;
            color: white;
        }


        * {
            box-sizing: border-box;
        }

        input[type=text],input[type=password],input[type=email], textarea {
            width: 90%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        select{
            width: 28%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            color:#aaa;
            margin-right:10px;
        }

        .country{
            width: 90%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            color:#aaa;
            margin-right:10px;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
            color:#ff0;
            margin-left:10%;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left:70%;
            margin-right:5px;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .btnUpdate{
            background-color: #dc8700;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btnUpdate:hover{
            background-color: #d8a44d;
        }

        .btnDelete{
            background-color: #d8544d;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btnDelete:hover{
            background-color: #d8644d;
        }
        input[type=reset] {
            background-color: #d8544d;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=reset]:hover {
            background-color: #d8644d;
        }

        .container {
            border-radius: 5px;
            background-color: #222536;
            padding: 20px;
        }

        .fluid {
            margin-left:20%;
            margin-right:20%;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .agree{
            color:#ff0;
            margin-left:300px;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

        .box{
            color : #ff0;
            background-color : #dc8700;
            border-radius: 5px;
            padding: 15px;
            margin-bottom:4px;
            margin-top:4px;
        }
        .alert{
            color:red;
            margin-left:300px;
        }
        
        .radio{
            margin-top:5px;
            margin-right:8px;
            color:#fff;
        }
    </style>
</head>
<body>
<div class="fluid">
<div class="box">
    Sign Up
 </div>
 


<form action="" method="POST">
  <div class="container">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" required name="firstname" placeholder="Enter First Name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" required name="lastname" placeholder="Enter Last Name..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Screen Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="scname" required name="scname" placeholder="Enter Screen Name..">
      </div>
    </div>


  
    <div class="row">
      <div class="col-25">
        <label for="dob">Date of Birth</label>
      </div>
      <div class="col-75">
        <select id="month" name="month" required onchange="SelectDate(this);">
          <option value="no">Select</option>
          <option value="01">January</option>
          <option value="02">February</option>
          <option value="03">March</option>
          <option value="04">April</option>
          <option value="05">May</option>
          <option value="06">June</option>
          <option value="07">July</option>
          <option value="08">August</option>
          <option value="09">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>

        <select id="date" name="date" required>
         
        </select>

        <select id="year" name="year" required>
          <option value="2000">2000</option>
          <option value="1999">1999</option>
          <option value="1998">1998</option>
          <option value="1997">1997</option>
          <option value="1996">1996</option>
          <option value="1995">1995</option>
          <option value="1994">1994</option>
          <option value="1993">1993</option>
          <option value="1992">1992</option>
          <option value="1991">1991</option>
          <option value="1990">1990</option>
          <option value="1989">1989</option>
          <option value="1988">1988</option>
          <option value="1987">1987</option>
          <option value="1986">1986</option>
          <option value="1985">1985</option>
          <option value="1984">1984</option>
        </select>
      </div>
    </div>

    <div class="row">
        <div class="col-25">
            <label for="gender">Gender</label>
        </div>

        <div class="col-75">
        <div class="radio">
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female<br>
        </div>
        </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
      <select name="country" class="country">
        <option value="Afganistan">Afghanistan</option>
        <option value="Albania">Albania</option>
        <option value="Algeria">Algeria</option>
        <option value="American Samoa">American Samoa</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Anguilla">Anguilla</option>
        <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
        <option value="Argentina">Argentina</option>
        <option value="Armenia">Armenia</option>
        <option value="Aruba">Aruba</option>
        <option value="Australia">Australia</option>
        <option value="Austria">Austria</option>
        <option value="Azerbaijan">Azerbaijan</option>
        <option value="Bahamas">Bahamas</option>
        <option value="Bahrain">Bahrain</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="Barbados">Barbados</option>
        <option value="Belarus">Belarus</option>
        <option value="Belgium">Belgium</option>
        <option value="Belize">Belize</option>
        <option value="Benin">Benin</option>
        <option value="Bermuda">Bermuda</option>
        <option value="Bhutan">Bhutan</option>
        <option value="Bolivia">Bolivia</option>
        <option value="Bonaire">Bonaire</option>
        <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
        <option value="Botswana">Botswana</option>
        <option value="Brazil">Brazil</option>
        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
        <option value="Brunei">Brunei</option>
        <option value="Bulgaria">Bulgaria</option>
        <option value="Burkina Faso">Burkina Faso</option>
        <option value="Burundi">Burundi</option>
        <option value="Cambodia">Cambodia</option>
        <option value="Cameroon">Cameroon</option>
        <option value="Canada">Canada</option>
        <option value="Canary Islands">Canary Islands</option>
        <option value="Cape Verde">Cape Verde</option>
        <option value="Cayman Islands">Cayman Islands</option>
        <option value="Central African Republic">Central African Republic</option>
        <option value="Chad">Chad</option>
        <option value="Channel Islands">Channel Islands</option>
        <option value="Chile">Chile</option>
        <option value="China">China</option>
        <option value="Christmas Island">Christmas Island</option>
        <option value="Cocos Island">Cocos Island</option>
        <option value="Colombia">Colombia</option>
        <option value="Comoros">Comoros</option>
        <option value="Congo">Congo</option>
        <option value="Cook Islands">Cook Islands</option>
        <option value="Costa Rica">Costa Rica</option>
        <option value="Cote DIvoire">Cote D'Ivoire</option>
        <option value="Croatia">Croatia</option>
        <option value="Cuba">Cuba</option>
        <option value="Curaco">Curacao</option>
        <option value="Cyprus">Cyprus</option>
        <option value="Czech Republic">Czech Republic</option>
        <option value="Denmark">Denmark</option>
        <option value="Djibouti">Djibouti</option>
        <option value="Dominica">Dominica</option>
        <option value="Dominican Republic">Dominican Republic</option>
        <option value="East Timor">East Timor</option>
        <option value="Ecuador">Ecuador</option>
        <option value="Egypt">Egypt</option>
        <option value="El Salvador">El Salvador</option>
        <option value="Equatorial Guinea">Equatorial Guinea</option>
        <option value="Eritrea">Eritrea</option>
        <option value="Estonia">Estonia</option>
        <option value="Ethiopia">Ethiopia</option>
        <option value="Falkland Islands">Falkland Islands</option>
        <option value="Faroe Islands">Faroe Islands</option>
        <option value="Fiji">Fiji</option>
        <option value="Finland">Finland</option>
        <option value="France">France</option>
        <option value="French Guiana">French Guiana</option>
        <option value="French Polynesia">French Polynesia</option>
        <option value="French Southern Ter">French Southern Ter</option>
        <option value="Gabon">Gabon</option>
        <option value="Gambia">Gambia</option>
        <option value="Georgia">Georgia</option>
        <option value="Germany">Germany</option>
        <option value="Ghana">Ghana</option>
        <option value="Gibraltar">Gibraltar</option>
        <option value="Great Britain">Great Britain</option>
        <option value="Greece">Greece</option>
        <option value="Greenland">Greenland</option>
        <option value="Grenada">Grenada</option>
        <option value="Guadeloupe">Guadeloupe</option>
        <option value="Guam">Guam</option>
        <option value="Guatemala">Guatemala</option>
        <option value="Guinea">Guinea</option>
        <option value="Guyana">Guyana</option>
        <option value="Haiti">Haiti</option>
        <option value="Hawaii">Hawaii</option>
        <option value="Honduras">Honduras</option>
        <option value="Hong Kong">Hong Kong</option>
        <option value="Hungary">Hungary</option>
        <option value="Iceland">Iceland</option>
        <option value="India">India</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Iran">Iran</option>
        <option value="Iraq">Iraq</option>
        <option value="Ireland">Ireland</option>
        <option value="Isle of Man">Isle of Man</option>
        <option value="Israel">Israel</option>
        <option value="Italy">Italy</option>
        <option value="Jamaica">Jamaica</option>
        <option value="Japan">Japan</option>
        <option value="Jordan">Jordan</option>
        <option value="Kazakhstan">Kazakhstan</option>
        <option value="Kenya">Kenya</option>
        <option value="Kiribati">Kiribati</option>
        <option value="Korea North">Korea North</option>
        <option value="Korea Sout">Korea South</option>
        <option value="Kuwait">Kuwait</option>
        <option value="Kyrgyzstan">Kyrgyzstan</option>
        <option value="Laos">Laos</option>
        <option value="Latvia">Latvia</option>
        <option value="Lebanon">Lebanon</option>
        <option value="Lesotho">Lesotho</option>
        <option value="Liberia">Liberia</option>
        <option value="Libya">Libya</option>
        <option value="Liechtenstein">Liechtenstein</option>
        <option value="Lithuania">Lithuania</option>
        <option value="Luxembourg">Luxembourg</option>
        <option value="Macau">Macau</option>
        <option value="Macedonia">Macedonia</option>
        <option value="Madagascar">Madagascar</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Malawi">Malawi</option>
        <option value="Maldives">Maldives</option>
        <option value="Mali">Mali</option>
        <option value="Malta">Malta</option>
        <option value="Marshall Islands">Marshall Islands</option>
        <option value="Martinique">Martinique</option>
        <option value="Mauritania">Mauritania</option>
        <option value="Mauritius">Mauritius</option>
        <option value="Mayotte">Mayotte</option>
        <option value="Mexico">Mexico</option>
        <option value="Midway Islands">Midway Islands</option>
        <option value="Moldova">Moldova</option>
        <option value="Monaco">Monaco</option>
        <option value="Mongolia">Mongolia</option>
        <option value="Montserrat">Montserrat</option>
        <option value="Morocco">Morocco</option>
        <option value="Mozambique">Mozambique</option>
        <option value="Myanmar">Myanmar</option>
        <option value="Nambia">Nambia</option>
        <option value="Nauru">Nauru</option>
        <option value="Nepal">Nepal</option>
        <option value="Netherland Antilles">Netherland Antilles</option>
        <option value="Netherlands">Netherlands (Holland, Europe)</option>
        <option value="Nevis">Nevis</option>
        <option value="New Caledonia">New Caledonia</option>
        <option value="New Zealand">New Zealand</option>
        <option value="Nicaragua">Nicaragua</option>
        <option value="Niger">Niger</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Niue">Niue</option>
        <option value="Norfolk Island">Norfolk Island</option>
        <option value="Norway">Norway</option>
        <option value="Oman">Oman</option>
        <option value="Pakistan">Pakistan</option>
        <option value="Palau Island">Palau Island</option>
        <option value="Palestine">Palestine</option>
        <option value="Panama">Panama</option>
        <option value="Papua New Guinea">Papua New Guinea</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Peru">Peru</option>
        <option value="Phillipines">Philippines</option>
        <option value="Pitcairn Island">Pitcairn Island</option>
        <option value="Poland">Poland</option>
        <option value="Portugal">Portugal</option>
        <option value="Puerto Rico">Puerto Rico</option>
        <option value="Qatar">Qatar</option>
        <option value="Republic of Montenegro">Republic of Montenegro</option>
        <option value="Republic of Serbia">Republic of Serbia</option>
        <option value="Reunion">Reunion</option>
        <option value="Romania">Romania</option>
        <option value="Russia">Russia</option>
        <option value="Rwanda">Rwanda</option>
        <option value="St Barthelemy">St Barthelemy</option>
        <option value="St Eustatius">St Eustatius</option>
        <option value="St Helena">St Helena</option>
        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
        <option value="St Lucia">St Lucia</option>
        <option value="St Maarten">St Maarten</option>
        <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
        <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
        <option value="Saipan">Saipan</option>
        <option value="Samoa">Samoa</option>
        <option value="Samoa American">Samoa American</option>
        <option value="San Marino">San Marino</option>
        <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
        <option value="Saudi Arabia">Saudi Arabia</option>
        <option value="Senegal">Senegal</option>
        <option value="Serbia">Serbia</option>
        <option value="Seychelles">Seychelles</option>
        <option value="Sierra Leone">Sierra Leone</option>
        <option value="Singapore">Singapore</option>
        <option value="Slovakia">Slovakia</option>
        <option value="Slovenia">Slovenia</option>
        <option value="Solomon Islands">Solomon Islands</option>
        <option value="Somalia">Somalia</option>
        <option value="South Africa">South Africa</option>
        <option value="Spain">Spain</option>
        <option value="Sri Lanka">Sri Lanka</option>
        <option value="Sudan">Sudan</option>
        <option value="Suriname">Suriname</option>
        <option value="Swaziland">Swaziland</option>
        <option value="Sweden">Sweden</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Syria">Syria</option>
        <option value="Tahiti">Tahiti</option>
        <option value="Taiwan">Taiwan</option>
        <option value="Tajikistan">Tajikistan</option>
        <option value="Tanzania">Tanzania</option>
        <option value="Thailand">Thailand</option>
        <option value="Togo">Togo</option>
        <option value="Tokelau">Tokelau</option>
        <option value="Tonga">Tonga</option>
        <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
        <option value="Tunisia">Tunisia</option>
        <option value="Turkey">Turkey</option>
        <option value="Turkmenistan">Turkmenistan</option>
        <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
        <option value="Tuvalu">Tuvalu</option>
        <option value="Uganda">Uganda</option>
        <option value="Ukraine">Ukraine</option>
        <option value="United Arab Erimates">United Arab Emirates</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="United States of America" selected>United States of America</option>
        <option value="Uraguay">Uruguay</option>
        <option value="Uzbekistan">Uzbekistan</option>
        <option value="Vanuatu">Vanuatu</option>
        <option value="Vatican City State">Vatican City State</option>
        <option value="Venezuela">Venezuela</option>
        <option value="Vietnam">Vietnam</option>
        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
        <option value="Wake Island">Wake Island</option>
        <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
        <option value="Yemen">Yemen</option>
        <option value="Zaire">Zaire</option>
        <option value="Zambia">Zambia</option>
        <option value="Zimbabwe">Zimbabwe</option>
        </select>
      </div>
    </div>



    <div class="row">
      
        <div class="col-25">
            <label for="email">E-Mail</label>
        </div>
        <div class="col-75">
            <input type="email" required id="email" name="email" placeholder="Enter Email..">
        </div>

    </div>

    <div class="row">
      
      <div class="col-25">
          <label for="phone">Phone</label>
      </div>
      <div class="col-75">
          <input type="text" required id="phone" name="phone" placeholder="Enter Phone..">
      </div>

    </div>

   <div class="row">
      
      <div class="col-25">
          <label for="password" >Password</label>
      </div>
      <div class="col-75">
          <input type="password" id="pass1" name="pass1" required>
      </div>

    </div>

    <div class="row">
      
      <div class="col-25">
          <label for="password2" >Confirm Password</label>
      </div>
      <div class="col-75">
          <input type="password" required id="pass2" name="pass2">
      </div>

    </div>

    <div class="agree">
    <input type="checkbox" name="agree" value="agree"> I agree to the terms of use<br>
    </div>

    </div>
      <div class="box">
        
        <input type="submit" value="Submit" name="create_user">
        <input type="reset" value="Cancel">
    </div>

  </form>

<?php
    if (isset($_SESSION['message'])) {
        echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
        unset($_SESSION['message']);
    }
?>

</div>

<table id="customers">

<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Screen Name</th>
    <th>DOB</th>
    <th>Gender</th>
    <th>Country</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Password</th>
    <th>Update</th>
    <th>Delete</th>
</tr>


<?php
if ($user_list->num_rows > 0) {
  while ($row = $user_list->fetch_assoc()) {
     ?>
             <tr>
                <td><?php echo $row["firstName"] ?></td>
                <td><?php echo $row["lastName"] ?></td>
                <td><?php echo $row["screenName"] ?></td>
                <td><?php echo $row["dob"] ?></td>
                <td><?php echo $row["gender"] ?></td>
                <td><?php echo $row["country"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["phone"] ?></td>
                <td><?php echo $row["password"] ?></td>
                <td>
                <a  href="<?php echo 'update.php?id=' . $row["screenName"] ?>">
                <button class="BtnUpdate">Edit</button></a> 
                </td>
                <td><a  href="<?php echo 'delete.php?id='.$row["screenName"] ?>">
                <button class="BtnDelete">Delete</button></a> </td>
                
            </tr>
    <?php
    }
}
?>

</body>


<script type="text/javascript">
                  
                  var date = new Array(12) 
                  date["01"] = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15',
                  '16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31']; 
                  date["02"] = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15',
                  '16','17','18','19','20','21','22','23','24','25','26','27','28']; 
                  date["03"] = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15',
                  '16','17','18','19','20','21','22','23','24','25','26','27','28','29','30']; 
                  date["04"]= ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15',
                  '16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'];
                  date["05"] = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15',
                  '16','17','18','19','20','21','22','23','24','25','26','27','28','29','30']; 
                  date["06"] = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15',
                  '16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31']; 
                  date["07"] = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15',
                  '16','17','18','19','20','21','22','23','24','25','26','27','28','29','30']; 
                  date["08"]= ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15',
                  '16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'];
                  date["09"] = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15',
                  '16','17','18','19','20','21','22','23','24','25','26','27','28','29','30']; 
                  date["10"] = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15',
                  '16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31']; 
                  date["11"] = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15',
                  '16','17','18','19','20','21','22','23','24','25','26','27','28','29','30']; 
                  date["12"]= ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15',
                  '16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'];   
   
                  function SelectDate(selectObj) { 
                  // get the index of the selected option 
                  var idx = selectObj.selectedIndex; 
                  // get the value of the selected option 
                  var which = selectObj.options[idx].value; 
                  // use the selected option value to retrieve the list of items from the date array 
                  cList = date[which]; 
                  // get the Date select element via its known id 
                  var cSelect = document.getElementById("date"); 
                  // remove the current options from the Date select 
                  var len=cSelect.options.length; 
                  while (cSelect.options.length > 0) { 
                  cSelect.remove(0); 
                  } 
                  var newOption; 
                  // create new options 
                  for (var i=0; i<cList.length; i++) { 
                  newOption = document.createElement("option"); 
                  newOption.value = cList[i];  // assumes option string and value are the same 
                  newOption.text=cList[i]; 
                  // add the new option 
                  try { 
                  cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
                  } 
                  catch (e) { 
                  cSelect.appendChild(newOption); 
                  } 
                  } 
                  } 
                  //]]>
</script>