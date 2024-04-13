<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $service_name = $_POST['service_name'];
        $s_desc= $_POST['s_desc'];
        $s_price = $_POST['s_price'];

         $insert = mysqli_query($conn,"INSERT INTO services
         (service_name,s_desc,s_price) VALUES ('$service_name','$s_desc','$s_price')");
 
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