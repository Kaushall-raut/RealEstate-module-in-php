<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Real Estate Navbar</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      table{
        margin-top:4rem;
      }h2{
        margin:2rem 0 0 0;
        /* font-size:3rem; */
        text-align:center;
      }
      #add {
        margin: 2rem;
        display: flex;
        justify-content: flex-end;
      }
    </style>
  </head>
  <body>
    <nav class="navbar">
      <div class="logo">
        <a href="#">RealEstateCo</a>
      </div>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Properties</a></li>
        <li><a href="#">Agents</a></li>
        <li><a href="buy.php">Buy</a></li>
        <!-- <li><a href="#">Blog</a></li> -->
        <li><a href="#">Contact</a></li>
        <li><a href="#" class="btn">Sign Up</a></li>
      </ul>
    </nav>
    <div id="btn">
      <a href="add.html" id="add">
        <button type="submit" class="btn btn-primary">Add new property</button>
      </a>
    </div>
    <table class="table container" border>
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">property type</th>
          <th scope="col">city</th>
          <th scope="col">area</th>
          <th scope="col">Sell/Rent</th>
          <th scope="col">amount</th>
          <th scope="col">features</th>
          <th scope="col">Seller contact</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php 
    $conn=mysqli_connect("localhost","root","","estate");
    
    
    if($conn){
    
      $cmd="select * from `seller`";
    
      $query=mysqli_query($conn,$cmd);
      while($result=mysqli_fetch_array($query)){
        // echo $result['company'];
    ?>
        <tr>
          <td><?php echo $result['id'] ?></td>
          <td><?php echo $result['propertyType'] ?></td>
          <td><?php echo $result['city'] ?></td>
          <td><?php echo $result['area'] ?></td>
          <td><?php echo $result['sellorrent'] ?></td>
          <td><?php echo $result['amount'] ?></td>
          <td><?php echo $result['features'] ?></td>
          <td><?php echo $result['sellerContact'] ?></td>

          <!-- <td><a href=.php"><button type="button" class="btn btn-success">buy</button></a></td> -->
        </tr>
      </tbody>
      <?php 
    }
      }
      ?>
    </table>
  </body>
</html>
