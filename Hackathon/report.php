<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">    
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main1.css" />
    <script src="jquery/jquery.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="js/bootstrap.js"></script> 
</head>
<body>
      
      <table class="table table-bordered">
      <thead class="thead-dark">
      <tr>
      <th scope="col">id</th>
      <th scope="col">Customer name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Order</th>
      <th scope="col">Address</th>
      <th scope="col">Status</th>
      <th scope="col">Order Date</th>
      </tr>
      </thead>
      <tbody>
      <?php
      include ('connection.php');
      $sql = "SELECT * FROM orders";
      $run = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($run)){
        ?>
      <tr>
      <th scope="row"><?php echo $row['order_id']?></th>
      <td><?php echo $row['customer_name']?></td>
      <td><?php echo $row['lastname']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['gender']?></td>
      <td><?php echo $row['phoneno']?></td>
      <td><?php echo $row['address1']?></td>
      <td><?php echo $row['address2']?></td>
      <td><?php echo $row['city']?></td>
      <td><?php echo $row['state1']?></td>
      <td><?php echo $row['menu']?></td>
      <td><?php echo $row['quantity']?></td>
      <td>
        <?php 
      if($row['order_status'] == 0){
      echo "Pending";
      }
      else{
      echo "Resolved";
      }
      $row['order_status']
      ?>
      </td>
      <td><?php echo $row['order_date']?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<button class="btn"><a href ="index.html" class = "nav-link">Back to Home</a></button>
</div>
</body>
</html>
           
            
       