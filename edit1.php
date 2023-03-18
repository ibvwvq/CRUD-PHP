<?
include 'config.php';

if(isset($_POST['edit'])){
        $NAME = $_POST['Name'];
        $PRICE = $_POST['Price'];
        $IMAGE = $_FILES['Image'];
        $ID = $_POST['Id'];
        $image_loc = $_FILES['Image']['tmp_name'];
        $image_name = $_FILES['Image']['name'];
        $image_des = 'images/'.$image_name;
        move_uploaded_file($image_loc,'images/'.$image_name);

        mysqli_query($connect, 
        "UPDATE `card` SET `Name`='$NAME',`Price`='$PRICE',`Image`='$image_des' WHERE `Id`='$ID'");

        header('Location:index.php');
}





?>