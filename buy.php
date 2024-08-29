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
      form{
        display:flex;
        justify-content:center;
      }
      label{
        font-size:1.2rem;
        font-weight:bold;
        margin-right:2rem;
      }
      .w{
        width:10rem;
        margin-right:2rem;
      }
    </style>
  </head>
  <body>
    <nav class="navbar">
      <div class="logo">
        <a href="#">RealEstateCo</a>
      </div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Properties</a></li>
        <li><a href="#">Agents</a></li>
        <li><a href="buy.php">Buy</a></li>
        <!-- <li><a href="#">Blog</a></li> -->
        <li><a href="#">Contact</a></li>
        <li><a href="#" class="btn">Sign Up</a></li>
      </ul>
    </nav>
    <h2>Buy Property</h2>
    <form class="container mt-3" action="<?php $_PHP_SELF ?>" method="get">
    <label for="ph" >Property type</label>
      <select
        name="property"
        class="form-select w mb-3"
        aria-label="Default select example"
      >
        <!-- <option selected>address proof</option> -->
        <option value="shop">shop</option>
        <option value="flat">flat</option>
        <option value="bunglaw">bunglow</option>
        <option value="plot">plot</option>
      </select>
        <button type="submit" name="check" class="btn btn-success">Search</button>
      </div>
     
    </form>
    <table class="table container" >
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
    if(isset($_REQUEST['check'])){
        $type=$_REQUEST['property'];
    
      $cmd="select * from `seller` where `propertyType`='$type'";
    
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
    }}
      }
      ?>
    </table>
  </body>
</html>
