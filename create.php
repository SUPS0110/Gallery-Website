<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./create.css">
</head>
<body>
    <div class="box">
        <form method="get" action="add.php">
          <div class="list"><label>Image url: </label><input type="url" name="image_url" placeholder="enter the url"></div>
<div class="list"><label>Title: </label><input name="title" placeholder="enter the title" type="text" required></div>
<div class="list"><label>Remarks: </label><textarea type="text" placeholder="description" name="remarks" required ></textarea></div>
    <div class="click"><button type="submit">ADD</button></div>
</form>
    </div>
</body>
</html>