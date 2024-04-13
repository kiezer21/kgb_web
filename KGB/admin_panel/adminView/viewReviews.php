<div >
  <h2>Reviews</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">No.</th>
        <th class="text-center">Username</th>
        <th class="text-center">User Rating</th>
        <th class="text-center">Comment</th>
        <th class="text-center">Date</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * FROM review_table";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["user_name"]?></td>   
      <td><?=$row["user_rating"]?></td> 
      <td><?=$row["user_review"]?></td> 
      <td><?=$row["datetime"]?></td> 
      <td><button class="btn btn-danger" style="height:40px" onclick="reviewDelete('<?=$row['review_id']?>')">Delete</button></td>
      </tr>
        
      <?php
            $count++;
          }
        }
      ?>
  </table>