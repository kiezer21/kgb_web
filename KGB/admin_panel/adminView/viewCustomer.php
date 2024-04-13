
<div >
  <h2>Services Available</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Customer Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Contact No.</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from customer";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["name"]?></td>
      <td><?=$row["email"]?></td>       
      <td><?=$row["contact"]?></td>     
      <td><button class="btn btn-danger" style="height:40px"  onclick="customerDelete('<?=$row['c_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

 
</div>
   