<div id="ordersBtn" >
  <h2>Order Details</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>O.N.</th>
        <th>Customer</th>
        <th>FB Link</th>
        <th>Contact</th>
        <th>Product Ordered</th>
        <th>Order Status</th>
     </tr>
    </thead>
     <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from order";
      $result=$conn-> query($sql);
      
      if ($result){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$row["id"]?></td>
          <td><?=$row["name"]?></td>
          <td><?=$row["fblink"]?></td>
          <td><?=$row["contact"]?></td>
           <?php 
                if($row["order_status"]==0){
                            
            ?>
                <td><button class="btn btn-danger" onclick="ChangeOrderStatus('<?=$row['id']?>')">Pending </button></td>
            <?php
                        
                }else{
            ?>
                <td><button class="btn btn-success" onclick="ChangeOrderStatus('<?=$row['id']?>')">Delivered</button></td>
        
            <?php
            }
            ?>
              
    <?php
            
        }
      }
    ?>
     
  </table>
   
</div>
<!-- Modal -->
  <!--
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <!--div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="order-view-modal modal-body">
        
        </div>
      </div><!--/ Modal content-->
    </div><!-- /Modal dialog-->
  </div>

<!--
<script>
     //for view order modal  
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
    
        $('.order-view-modal').load(dataURL,function(){
          $('#viewModal').modal({show:true});
        });
      });
    });
 </script>
 -->



 <div class="card-container">
   <?php
      include_once "admin_panel\config\dbconnect.php";
      $sql="SELECT * from services";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
            ?>
      <div class="card">
         <p class="service_name" style="font-size: 20px;"><b><?php echo $row["service_name"]; ?></b></p>
         <p class="s_desc" rows="10"><?php echo $row["s_desc"]; ?></p>
         <p class="s_price" style="color: #f7444e;"><b>₱<?php echo $row["s_price"]; ?></b></p>
      </div>
   <?php }
    } ?>   
</div>







 <div class="card-container">
    <?php
    include_once "admin_panel/config/dbconnect.php";
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?> 
        <div class="card">
            <div class="image">
                <img src="<?php echo str_replace('./uploads/', 'admin_panel/uploads/', $row['product_image']); ?>">
            </div>
            <div class="caption">
                <p class="rate">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </p>
                <p class="product_name" style="color: #f7444e; font-size: 30px; font-family: 'Playfair Display', sans-serif;"><b><?php echo $row["product_name"]; ?></b></p>
                <p class="p_price" style="color: black; font-family: 'Times New Roman', sans-serif;"><b>₱<?php echo $row["price"]; ?></b></p>
                <form action="order.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $row["id"]; ?>">
                    <input type="submit" value="Buy Now">
                </form>
            </div>
        </div>
    <?php
        }
    } else {
        echo "No products available";
    }
    ?>
</div>





<?php
   include_once "admin_panel\config\dbconnect.php";
   $query = "select * from arrival";
   $result = mysqli_query($conn,$query);
?>

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
                        <li class="nav-item">
                            <a class="nav-link" href="service.php">Services</a>
                        <li>
                        <li class="nav-item">
                           <a class="nav-link" href="blog_list.php">About US</a>
                        </li>
                        <li class="nav-item active">
                           <a class="nav-link" href="contact.php">Contact</a>
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
                     <h3>Contact us</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                     <form action="index.php">
                        <fieldset>
                           <input type="text" placeholder="Enter your full name" name="name" required />
                           <input type="email" placeholder="Enter your email address" name="email" required />
                           <input type="text" placeholder="Enter subject" name="subject" required />
                           <textarea placeholder="Enter your message" required></textarea>
                          <a href="mailto:malakiezer21@gmail.com">
                            <input type="submit" value="Submit" />
                           </a>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->
      <!-- arrival section -->
      <!-- end arrival section -->
      
      <!-- footer section -->
      
      <!----?php
      <footer class="footer_section">
         <div class="container">
            <div class="row">
               <div class="col-md-4 footer-col">
                  <div class="footer_contact">
                     <h4>
                        Reach us at..
                     </h4>
                     <div class="contact_link_box">
                        <a href="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                        Baliwasan, Zamboanga City
                        </span>
                        </a>
                        <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                        Call +639929161496
                        </span>
                        </a>
                        <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                        kgbstore@gmail.com
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 footer-col">
                  <div class="footer_detail">
                     <a href="index.php" class="footer-logo">
                     KGB Store
                     </a>
                     <p>
                        You may also reach us online
                     </p>
                     <div class="footer_social">
                        <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 footer-col">
                  <div class="map_container">
                     <div class="map">
                        <div id="googleMap"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-info">
               <div class="col-lg-7 mx-auto px-0">
                  <p>
                     &copy; <span id="displayYear"></span> All Rights Reserved By KGB Store
                  </p>
               </div>
            </div>
         </div>
      </footer>
      ?---!>
      <!-- footer section -->
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