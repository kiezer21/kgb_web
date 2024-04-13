<?php
   session_start();
   include_once "./config/dbconnect.php";

?>
       
 <!-- nav -->
 <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #e5d3b3;">
    
    <a class="navbar-brand ml-5" href="./index.php">
    <div style="display: flex; align-items: center;">
    <img src="./assets/images/logo2.png" width="130" height="130" style="margin-right: 10px;">
    <p style="margin: 20px auto 0; text-align: center; font-size: 100px; font-weight: bold; font-family: 'Times New Roman', sans-serif;">A D M I N &nbsp; P A G E</p>
</div>

    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
    <div class="user-cart">  
        <?php           
        if(isset($_SESSION['user_id'])){
          ?>
          <a href="../index.php" style="text-decoration:none;">
            <i class="fa fa-user mr-5" style="font-size:30px; color:#966443;" aria-hidden="true"></i>
         </a>
          <?php
        } else {
            ?>
            <a href="../index.php" style="text-decoration:none;">
                    <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#966443;" aria-hidden="true"></i>
            </a>

            <?php
        } ?>
    </div>  
</nav>
