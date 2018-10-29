<?php
include 'query.php';
$user_obj = new User();
$user_list = $user_obj->user_list();

if (isset($_GET['id'])) {
    $user_info = $user_obj->viewUser($_GET['id']);
    if (isset($_POST['update_user']) && $_GET['id'] === $_POST['scname']) {
        $user_obj->updateUser($_POST);
    }
} else {
    header('Location: form.php');
}
?>

<?php
    if (isset($_SESSION['message'])) {
        echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
        unset($_SESSION['message']);
    }
?>
<html>
<head>
    <title>Update User</title>

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
    <a href="form.php"><button class="BtnUpdate">Back</button></a>
    <div class="col-75">Update User</div>
 </div>
 



<form action="" method="POST">
  <div class="container">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" required name="firstname" placeholder="Enter First Name.."
        value="<?php if (isset($user_info['firstName'])) {
            echo $user_info['firstName'];
        } ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" required name="lastname" placeholder="Enter Last Name.."
        value="<?php if (isset($user_info['lastName'])) {
            echo $user_info['lastName'];
        } ?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Screen Name</label>
      </div>
      <div class="col-75">
        <input type="text" readonly id="scname" required name="scname" placeholder="Enter Screen Name.."
        value="<?php if (isset($user_info['screenName'])) {
            echo $user_info['screenName'];
        } ?>">
      </div>
    </div>


  

    <div class="row">
      
        <div class="col-25">
            <label for="email">E-Mail</label>
        </div>
        <div class="col-75">
            <input type="email" required id="email" name="email" placeholder="Enter Email.."
            value="<?php if (isset($user_info['email'])) {
            echo $user_info['email'];
        } ?>">
        </div>

    </div>

    <div class="row">
      
      <div class="col-25">
          <label for="phone">Phone</label>
      </div>
      <div class="col-75">
          <input type="text" required id="phone" name="phone" placeholder="Enter Phone.."
          value="<?php if (isset($user_info['phone'])) {
            echo $user_info['phone'];
        } ?>">
      </div>

    </div>

   <div class="row">
      
      <div class="col-25">
          <label for="password" >Password</label>
      </div>
      <div class="col-75">
          <input type="password" id="pass1" name="pass1" required
          value="<?php if (isset($user_info['password'])) {
            echo $user_info['password'];
        } ?>">
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
    <input type="checkbox" required name="agree" value="agree"> I agree to the terms of use<br>
    </div>

    </div>
      <div class="box">
        
        <input type="submit" value="Update" name="update_user">
        <input type="reset" value="Cancel">
    </div>

</div>

</body>
</html>