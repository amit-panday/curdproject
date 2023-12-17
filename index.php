<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
            <center>
            <div class="main">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
            <label for="">Name:</label>
            <input type="text" name="name"><br>
            <label for="">Price:</label>
            <input type="text" name="price" id=""><br>
            <label for="">Image</label>
            <input type="file" name="Image" id=""><br>
            <button name="upload">Upload</button>
            </form>
        </div>
    </center>

            <!-- fetch data -->
            
            <div class="container">

            <table class="table">

  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    include 'config.php';
    $pic = mysqli_query($con,"SELECT * FROM 'tblcard'");
    while($row = mysqli_fetch_array($pic)){
      echo "
      <tr>
          <td>$row[Id]</td>
          <td>$row[Name]</td>
          <td>$row[Price]</td>
          <td><img src='$row[Image]' width = '200px' height = '70px'></td>
          <td><a href='delete.php? Id= $row[Id]' class = 'btn btn-danger'>Delete</a></td>
          <td><a href='update.php? Id= $row[Id]' class = 'btn btn-danger'>Update</a></td>

          <td></td>
          <td></td>
      </tr>
      ";
    }
    


    ?>
  </tbody>
</table>
</div>
</body>
</html>