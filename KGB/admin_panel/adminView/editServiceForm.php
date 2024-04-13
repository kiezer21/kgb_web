
<div class="container p-5">

<h4>Edit Service Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$id=$_POST['record'];
	$service=mysqli_query($conn, "SELECT * FROM services WHERE id='$id'");
	$numberOfRow=mysqli_num_rows($service);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($service)){
?>
<form id="update-Service" onsubmit="updateService()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="id" value="<?=$row1['id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">Service Name:</label>
      <input type="text" class="form-control" id="service_name" value="<?=$row1['service_name']?>">
    </div>
    <div class="form-group">
    <label for="desc">Service Description:</label>
    <textarea class="form-control" id="s_desc" rows="10"><?=$row1['s_desc']?></textarea>
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" class="form-control" id="s_price" value="<?=$row1['s_price']?>">
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Service</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

    </div>