<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $ProductName = $_POST['p_name'];
        $price = $_POST['p_price'];
       
            
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        $location="./uploads/";
        $image=$location.$name;

        $target_dir="../uploads/";
        $finalImage=$target_dir.$name;

        move_uploaded_file($temp,$finalImage);

         $insert = mysqli_query($conn,"INSERT INTO product
         (product_name,product_image,price) 
         VALUES ('$ProductName','$image',$price)");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Product added successfully.";
         }
     
    }
        
?>