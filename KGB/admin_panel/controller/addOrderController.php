<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $product_id = $_POST['product_id'];
        $name= $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];

         $insert = mysqli_query($conn,"INSERT INTO orders
         (product_id,name,email,contact) VALUES ('$product_id','$name','$email',$contact)");
 
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