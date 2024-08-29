<?php  
$id=$_REQUEST['pid'];
 $property=$_REQUEST['property'];
 $city=$_REQUEST['city'];
 $area=$_REQUEST['area'];
 $sell=$_REQUEST['sellorrent'];
 $amount=$_REQUEST['amount'];
 $feature=$_REQUEST['feature'];
 $contact=$_REQUEST['contact'];


$conn=mysqli_connect("localhost","root","","estate");
if($conn){
    
    if(isset($_REQUEST['sub'])){

        $cmd="insert into `seller` values('$id','$property','$city','$area','$sell','$amount','$feature','$contact')";
        $res=mysqli_query($conn,$cmd);
        // echo $res;
        // echo $contact;
        header("location:index.php");
    }


}

?>