<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name ='directions';



$con= new mysqli($db_host,$db_user,$db_password ,$db_name);

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";
  exit();

if(isset($_POST['forward'])){

    $sql = "select * from directions WHERE 1 ";
    $res = mysqli_query($con, $sql);

    $sql = "INSERT INTO directions (forward) VALUES ('forward')";
    $res = mysqli_query($con, $sql);
    if($res)
    {
        echo " Item has been recently uploaded";
    }
    else{
        echo "ERROR: Unable to past <br>";}
    }

if(isset($_POST['left'])){

    $sql = "select * from directions WHERE 1 ";
    $res = mysqli_query($con, $sql);

    $sql = "INSERT INTO directions (left_d) VALUES ('left')";
    $res = mysqli_query($con, $sql);
    if($res)
    {
        echo " Item has been recently uploaded";
    }
    else{
        echo "ERROR: Unable to past <br>";}
    }
    if(isset($_POST['right'])){

    $sql = "select * from directions WHERE 1 ";
    $res = mysqli_query($con, $sql);

    $sql = "INSERT INTO directions (right_d) VALUES ('right')";
    $res = mysqli_query($con, $sql);
    if($res)
    {
        echo " Item has been recently uploaded";
    }
    else{
        echo "ERROR: Unable to past <br>";}
    
    }
    if(isset($_POST['stop'])){

    $sql = "select * from directions WHERE 1 ";
    $res = mysqli_query($con, $sql);

    $sql = "INSERT INTO directions (stop) VALUES ('stop')";
    $res = mysqli_query($con, $sql);
    if($res)
    {
        echo " Item has been recently uploaded";
    }
    else{echo "ERROR: Unable to past <br>"; }
    }
    if(isset($_POST['backward'])){
    $sql = "select * from directions WHERE 1 ";
    $res = mysqli_query($con, $sql);

    $sql = "INSERT INTO directions (backward) VALUES ('backward')";
    $res = mysqli_query($con, $sql);
    if($res)
    { echo " Item has been recently uploaded";}
    else{ echo "ERROR ";}
     }?>
