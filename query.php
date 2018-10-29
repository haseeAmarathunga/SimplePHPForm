<?php
class User
{
    function __construct() {
        session_start();
        include('database.php');

    }


    public function user_list(){
        
       $sql = "SELECT * FROM user";
       $result=  $this->db->query($sql);
       return $result;
    }
    
    public function addUser($post_data=array()){
         
       if(isset($post_data['create_user'])){
        //$student_name= mysqli_real_escape_string($this->conn,trim($post_data['student_name']));
        $firstName = mysqli_real_escape_string($this->db,$post_data['firstname']);
        $lastName = mysqli_real_escape_string($this->db,$post_data['lastname']);
        $scName = mysqli_real_escape_string($this->db,$post_data['scname']); 
        $month = mysqli_real_escape_string($this->db,$post_data['month']); 
        $date = mysqli_real_escape_string($this->db,$post_data['date']); 
        $year = mysqli_real_escape_string($this->db,$post_data['year']); 
        $gender = mysqli_real_escape_string($this->db,$post_data['gender']); 
        $country = mysqli_real_escape_string($this->db,$post_data['country']);
        $email = mysqli_real_escape_string($this->db,$post_data['email']); 
        $phone = mysqli_real_escape_string($this->db,$post_data['phone']); 
        $pass1 = mysqli_real_escape_string($this->db,$post_data['pass1']); 
        $pass2 = mysqli_real_escape_string($this->db,$post_data['pass2']);   
 
        $dob=$year."/".$month."/".$date;
       
        if($pass1==$pass2){
            $sql = "INSERT INTO user VALUES
            ('$firstName','$lastName','$scName','$dob','$gender','$country','$email','$phone','$pass1')";
            //mysqli_query($this->db,$sql);
            $result=  $this->db->query($sql);
            //header("location:form.php");
            if($result){
                
                $message="Register Successfully. Welcome ".$firstName;
                $_SESSION["message"]=$message;
                header("location:form.php");
                
            }
        }else{
            $error="Passwords are not match!";
            $_SESSION["error"]=$error;
            header("location:form.php");
        }
          
       unset($post_data['addUser']);
       }
       
        
    }
    
    public function viewUser($scName){
       if(isset($scName)){
       $user_id= mysqli_real_escape_string($this->db,trim($scName));
      
       $sql="Select * from user where screenName='$user_id'";
        
       $result=  $this->db->query($sql);
     
        return $result->fetch_assoc(); 
    
       }  
    }
    
    
    public function updateUser($post_data=array()){
       if(isset($post_data['update_user'])&& isset($post_data['scname'])){
           
        $firstName = mysqli_real_escape_string($this->db,$post_data['firstname']);
        $lastName = mysqli_real_escape_string($this->db,$post_data['lastname']);
        $scName = mysqli_real_escape_string($this->db,$post_data['scname']); 
        $email = mysqli_real_escape_string($this->db,$post_data['email']); 
        $phone = mysqli_real_escape_string($this->db,$post_data['phone']); 
        $pass1 = mysqli_real_escape_string($this->db,$post_data['pass1']); 
        $pass2 = mysqli_real_escape_string($this->db,$post_data['pass2']);

         
       $sql="UPDATE user SET firstName='$firstName',lastName='$lastName',
       email='$email',phone='$phone',
       password='$pass1' WHERE screenName ='$scName'";
       
       if($pass1==$pass2){
        $result=  $this->db->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Updated Student Info";
           }
   
        unset($post_data['update_student']);
        header('Location: form.php');
        }else{
            $_SESSION['message']="Passwords are not matched!";
        }
    }   
    }
    
    public function deleteUser($id){
        
       if(isset($id)){
       $user_id= mysqli_real_escape_string($this->db,trim($id));

       $sql="DELETE FROM  user  WHERE screenName ='$user_id'";
        $result=  $this->db->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Deleted Student Info";
               header('Location: form.php'); 
           }
       }
         header('Location: form.php'); 
    }
    function __destruct() {
    mysqli_close($this->db);  
    }
    
}

?>