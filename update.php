<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php

include 'config.php';
$ID = $_GET['Id'];
$Record = mysqli_fetch_array($Record);

?>

<center>
            <div class="main">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
            <label for="">Name:</label>
            <input type="text" value="<?php echo $data['Name'] ?>" name="name"><br>
            <label for="">Price:</label>
            <input type="text"   value="<?php echo $data['Price'] ?>"name="price" id=""><br>
            <label for="">Image</label>
            <input type="file" name="Image"  value="<?php echo $data['Name'] ?>" id=""><br>
            <button name="upload">Upload</button>
            </form>
        </div>
    </center>



</body>
</html>