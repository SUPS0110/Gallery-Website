<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="gallerydb";
    $conn= new mysqli($servername,$username,$password,$database);
    if($conn->connect_error){
        die ("connection failed");
    }?>
        <div class="header"><h2>BTS ALBUMS</h2></div>
    <div class="add"><a href="create.php">+ New Album</a></div>
        <div class="desc">
            <?php
            $sql="SELECT *FROM BTS";
            $res=$conn->query($sql);
            if($res->num_rows>0){
                while($row=$res->fetch_assoc()){
                    ?>
                    <div class="gallery">
                        <div class="id">
                        <?php  echo $row['id']; ?>.
                        </div>
                        <div class="image">
                            <img src=" <?php echo $row['image_url']?>" alt="album_image">
                        </div>
                        <div class="title">
                            <?php echo $row['title']; ?>
                        </div>
                        <div class="remark">
                            <?php echo $row['remarks']; ?>
                        </div>
                        <div class="change">
                            <div class="edit"><a href="./edit.php?id=<?php echo $row['id']; ?>">EDIT</a></div>
                        <div class="delete"><a href="./delete.php?id=<?php echo $row['id']; ?>">DELETE</a></div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
     <div class="footer"><a href="https://ibighit.com/bts/eng/discography/" target="_blank"> &#169BTS</a></div>
    <?php
    $conn->close();
     ?>
</body>
</html>