<!-- Deleting from database -->

<?php
include("config.php");
$id = $_GET['id'];
$query = "DELETE FROM `product` WHERE `id`='$id'";
$result = mysqli_query($conn, $query);

if($result==1){
    echo '<script>window.location.assign("manageProduct.php?msg=Prodcut Deleted Successfully!");</script>';
}
else{
    echo '<script>window.location.assign("manageProduct.php?msg=Failed to delete product!");</script>';

}
?>