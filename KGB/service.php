<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>KGB Store</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
   </head>
   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.php"><img width="250" src="images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                           <ul class="dropdown-menu">
                              <li><a href="about.php">About</a></li>
                              <li><a href="testimonial.php">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="product.php">Products</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="service.php">Services</a>
                        <li>
                        <li class="nav-item">
                           <a class="nav-link" href="blog_list.php">About Us</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.php">Reviews</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Now Offering!</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
       <!-- heading section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Available <span>Services</span>
               </h2>
               <p>
               <p>
               <p>
            </div>
            <div class="row"></div>
            <style>
    .bcontainer {
        max-width: 1200px; 
        min-height: 700px;
        margin: 0 auto; 
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .services {
        position: relative;
        width: calc(33.33% - 20px);
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        text-align: center; 
    }

    .services p {
        margin: 0;
        padding: 5px 0;
    }

    .services button {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #f7444e;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
    }

    .price {
        position: absolute;
        top: -30px; 
        left: 50%;
        transform: translateX(-50%);
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
    }
</style>

<?php
include_once "admin_panel/config/dbconnect.php";


$sql = "SELECT * FROM services";
$result = $conn->query($sql);


if ($result && $result->num_rows > 0) {
    $services = $result->fetch_all(MYSQLI_ASSOC); 
} else {
    $services = []; 
}
?>
<div class="bcontainer">
    <?php
    
    foreach ($services as $service) {
        
        echo "<div class='services'>";
        echo "<p><strong style='font-size: 1.1em; color: #f7444e;'>" . $service["service_name"] . "</strong></p>";
        echo "<p><strong>Price:</strong> ₱" . $service["s_price"] . "</p>";
        echo "<p>" . $service["s_desc"] . "</p>";
        echo "<a href='sorder.php?id=" . $service["id"] . "'><button>Avail Now</button></a>";
        echo "</div>";
    }
    ?>
</div>



</body>
</html>

      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>