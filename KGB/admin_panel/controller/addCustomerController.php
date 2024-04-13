<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $name = $_POST['name'];
        $email= $_POST['email'];
        $contact = $_POST['contact'];

         $insert = mysqli_query($conn,"INSERT INTO customer
         (name, email, contact) VALUES ('$name','$email','$contact')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?service=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php?service=success");
         }
     
    }
        
?>