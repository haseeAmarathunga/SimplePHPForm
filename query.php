<?php
include("database.php");

session_start();
   $error = "";
   $message="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      

      $firstName = mysqli_real_escape_string($db,$_POST['firstname']);
      $lastName = mysqli_real_escape_string($db,$_POST['lastname']);
      $scName = mysqli_real_escape_string($db,$_POST['scname']); 
      $month = mysqli_real_escape_string($db,$_POST['month']); 
      $date = mysqli_real_escape_string($db,$_POST['date']); 
      $year = mysqli_real_escape_string($db,$_POST['year']); 
      $gender = mysqli_real_escape_string($db,$_POST['gender']); 
      $country = mysqli_real_escape_string($db,$_POST['country']);
      $email = mysqli_real_escape_string($db,$_POST['email']); 
      $phone = mysqli_real_escape_string($db,$_POST['phone']); 
      $pass1 = mysqli_real_escape_string($db,$_POST['pass1']); 
      $pass2 = mysqli_real_escape_string($db,$_POST['pass2']);   

      $dob=$year."/".$month."/".$date;
      
      //function for add details.
      function addDetails($db,$firstName,$lastName,$scName,$dob,$gender,$country,$email,$phone,$pass1,$pass2){

        if($pass1==$pass2){
          $sql = "INSERT INTO user VALUES
          ('$firstName','$lastName','$scName','$dob','$gender','$country','$email','$phone','$pass1')";
          mysqli_query($db,$sql);
          //header("location:form.php");
          $message="Register Successfully. Welcome ".$firstName;
          $_SESSION["message"]=$message;
          header("location:form.php");
        }else{
            $error="Passwords are not match!";
            $_SESSION["error"]=$error;
            header("location:form.php");

        }
      }

      function updateDetails($db,$firstName,$lastName,$scName,$dob,$gender,$country,$email,$phone,$pass1,$pass2){
      //I get screenName as the Primary Key.
        if($pass1==$pass2){
          $sql = "UPDATE user SET firstName='$firstName',lastName='$lastName',
          dob='$dob',gender='$gender',country='$country',email='$email',phone='$phone' WHERE
          screenName='$scName')";
          mysqli_query($db,$sql);
          header("location:form.php");
          $message="Update Successfully";
          $_SESSION["message"]=$message;
          header("location:form.php");
        }else{
            $error="Passwords are not match!";
            $_SESSION["error"]=$error;
            header("location:form.php");

        }
      }

      addDetails($db,$firstName,$lastName,$scName,$dob,$gender,$country,$email,$phone,$pass1,$pass2);
      
      
      

    }

?>