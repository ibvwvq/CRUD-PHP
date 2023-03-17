<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <form action="insert.php" method="POST" enctype='multipart/form-data'>
            <label for="">Name:</label> <br>
            <input type="text" name = "Name"><br>
            <label for="">Price:</label> <br>
            <input type="number" name="Price"><br>
            <label for="">Image:</label> <br>
            <input type="file" name="Image"><br>

            <button name="upload" class="btn-upload" >Upload</button>
        </form>
    </div>
</body>
</html>

<style>
   .main{
    text-align: center; 
    margin-top: 30px; 
   }

 

   .btn-upload{
        margin: 10px;
   }
  </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">