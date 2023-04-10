<?php
$servername="localhost";
$username="root";
$password="";
$database="gallerydb";
$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("connection failed");
}
$id=$_GET['id'];
$image_url=$_GET['image_url'];
$title=$_GET['title'];
$remarks=$_GET['remarks'];
$sql="UPDATE BTS SET image_url='$image_url',title='$title',remarks='$remarks' where id=$id;";
$res=$conn->query($sql);
if($res===TRUE){
    header("location:index.php");
}
else{
    echo ("update failed");
}
?>