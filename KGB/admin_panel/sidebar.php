<style>
    @font-face {
        font-family: 'Orion Esperanto Dika';
        src: url('path/to/OrionEsperantoDika.woff') format('woff'),
             url('path/to/OrionEsperantoDika.ttf') format('truetype');
    }
    
</style>
<div class="sidebar" id="mySidebar" style="background-color: #e5d3b3;">
    <div class="side-header">
        <img src="./assets/images/logo.png" width="200" height="200"> 
        <h5 style="margin-top:10px; color: black;">Welcome Admin!</h5>
    </div>

    <hr style="border:15px solid; background-color:#664229; border-color:#664229;">
    <a style="font-family: 'Orion Esperanto Dika', sans-serif;" href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a style="font-family: 'Orion Esperanto Dika', sans-serif;" href="./index.php"><i class="fa fa-home"></i> Dashboard</a>
    <a style="font-family: 'Orion Esperanto Dika', sans-serif;" href="#productsizes" onclick="showServices()"><i class="fa fa-th-list"></i> Services</a>    
    <a style="font-family: 'Orion Esperanto Dika', sans-serif;" href="#products" onclick="showProductItems()"><i class="fa fa-th"></i> Products</a>
    <a style="font-family: 'Orion Esperanto Dika', sans-serif;" href="#orders" onclick="showOrder()"><i class="fa fa-list"></i> Product Orders</a>
    <a style="font-family: 'Orion Esperanto Dika', sans-serif;" href="#customers" onclick="showSorder()"><i class="fa fa-users"></i> Service Orders</a>
    <a style="font-family: 'Orion Esperanto Dika', sans-serif;" href="#productsizes" onclick="showReviews()"><i class="fa fa-th-list"></i> Reviews</a>    
</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>
