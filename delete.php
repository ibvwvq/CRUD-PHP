<?


    include 'config.php';

  $ID = $_GET['Id'];

   mysqli_query($connect, "DELETE FROM `card` WHERE Id = $ID");

   header('Location: index.php');

?>