<?php
include("database.php");

session_start();
   $error = "";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      

      $firstName = mysqli_real_escape_string($db,$_POST['firstname']);
      $lastName = mysqli_real_escape_string($db,$_POST['lastname']);
      $scName = mysqli_real_escape_string($db,$_POST['scname']); 
      $month = mysqli_real_escape_string($db,$_POST['month']); 
      $date = mysqli_real_escape_string($db,$_POST['date']); 
      $year = mysqli_real_escape_string($db,$_POST['year']); 
      $country = mysqli_real_escape_string($db,$_POST['country']);
      $email = mysqli_real_escape_string($db,$_POST['email']); 
      $phone = mysqli_real_escape_string($db,$_POST['phone']); 
      $pass1 = mysqli_real_escape_string($db,$_POST['pass1']); 
      $pass2 = mysqli_real_escape_string($db,$_POST['pass2']);   

      $dob=$year."/".$month."/".$date;
      
      $message=$scName;
      if($pass1==$pass2){
        $sql = "INSERT INTO user VALUES
        ('$firstName','$lastName','$scName','$dob','$gender','$country','$email','$phone','$pass1')";
        mysqli_query($db,$sql);
      }else{
          $error="Passwords are not match!";
          $_SESSION["error"]=$error;
          header("location:form.php");
      }
      
      
      $_SESSION["message"]=$message;

    }

    echo $firstName;
    echo $lastName;
    echo $country;
    echo $dob;

?>