<?php
    include 'query.php';
    $user_obj = new User();
    $user_list = $user_obj->user_list();
 if(isset($_GET['id'])){
  $user_info=$user_obj->deleteUser($_GET['id']);
     
 }else{
  header('Location: form.php');
 } 
 ?>
