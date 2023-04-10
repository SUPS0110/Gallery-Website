<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./form.css">
</head>
<body>
    <div class="box">
        <form method="get" action="edit.php">
            <input type="number" name="id" value="<?php echo $_GET['id'];?>" hidden >
          <div class="list"><label>Image url: </label>
          <input type="url" name="image_url" placeholder="enter the url" value="<?php echo $_GET['image_url'];?>"></div>
<div class="list"><label>Title: </label>
<input name="title" placeholder="enter the title" type="text" value="<?php echo $_GET['title'];?>" required></div>
<div class="list"><label>Remarks: </label>
<textarea type="text" placeholder="description" name="remarks" required ><?php echo $_GET['remarks'];?></textarea></div>
    <div class="click"><button type="submit">EDIT</button></div>
</form>
    </div>
</body>
</html>