<?

    include 'config.php';

    if(isset($_POST['upload'])){
            $NAME = $_POST['Name'];
            $PRICE = $_POST['Price'];
            $IMAGE = $_FILES['Image'];
           
            $image_loc = $_FILES['Image']['tmp_name'];
            $image_name = $_FILES['Image']['name'];
            $image_des = 'images/'.$image_name;
            move_uploaded_file($image_loc,'images/'.$image_name);

            mysqli_query($connect, 
            "INSERT INTO `card` (`Name`, `Price`, `Image`) 
            VALUES ('$NAME', '$PRICE', '$image_des')");
            header('Location:index.php');
    }

?>