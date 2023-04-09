<?php
$servername="localhost";
$username="root";
$password="";
$database="gallerydb";
$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("connection failed");
}
$image=$_GET['image_url'];
$title=$_GET['title'];
$remarks=$_GET['remarks'];
$sql="INSERT INTO  BTS SET 
id=null,image_url='$image',title='$title',remarks='$remarks';";
$res=$conn->query($sql);
if($res===TRUE){
    header("location:index.php");
}
else{
    echo ("insertion failed");
}
?>