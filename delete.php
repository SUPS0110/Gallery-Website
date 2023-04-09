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
$sql="DELETE FROM bts where id=$id";
$res=$conn->query($sql);
if($res===TRUE){
    header("location:index.php");
}
else{
    echo "Deletion failed";
}
?>