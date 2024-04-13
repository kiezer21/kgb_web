
<div >
  <h2>Services Available</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">No.</th>
        <th class="text-center">Service Name</th>
        <th class="text-center">Description</th>
        <th class="text-center">Price</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from services";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["service_name"]?></td>
      <td><?=$row["s_desc"]?></td>      
      <td contenteditable="true">₱<?=$row["s_price"]?></td>     
      <td><button class="btn btn-primary" style="height:40px" onclick="serviceEditForm('<?=$row['id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px"  onclick="serviceDelete('<?=$row['id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Services
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add New Service</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addServicesController.php" method="POST">
            
          <div class="form-group">
              <label>Service Name:</label>
              <input type="text" class="form-control" name="service_name" required>
            </div>
            <div class="form-group">
            <label>Description:</label>
                <textarea class="form-control" name="s_desc" required style="height: 100px;"></textarea>
            </div>
            <div class="form-group">
              <label for="qty">Price:</label>
              <input type="number" class="form-control" name="s_price" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Service</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   