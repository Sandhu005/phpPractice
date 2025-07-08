<?php
include("adminHeader.php");
?>

 <div class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="row w-50 flex-column my-5 align-items-center">
                <div class="col-md-6">
                    <label for="exampleInputCatagoryName" class="form-label">Catagory Name</label>
                    <input type="text" name="catagoryName" class="form-control" id="exampleInputCatagoryName" aria-describedby="nameHelp" required>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="exampleInputCatagoryImg" class="form-label">Catagory Image</label>
                    <input type="file" name="catagoryImg" class="form-control" id="exampleInputCatagoryImg" aria-describedby="nameHelp" required>
                </div>
                <button type="submit" class="col-md-4 btn btn-success mt-4" name="addBtn">Add Catagory</button>
            </div>
        </form>
    </div>

<?php

// Adding to database
if(isset($_POST['addBtn'])){
    $name = $_POST['catagoryName'];
    $img = $_FILES['catagoryImg'];
    $imgName = $img['name'];
    $imgTemp = $img['tmp_name'];
    $imgNewName = rand()."-".$imgName;

    $conn = mysqli_connect("localhost", "root", "", "mentor");
    $query = "INSERT INTO `courseCatagory`(`name`, `img`) VALUES ('$name', '$imgNewName')";
    $result = mysqli_query($conn, $query);

    if($result==1){
        echo "Data Added Successfully!";
        move_uploaded_file($imgTemp, "catagoryImage/".$imgNewName);
    }else{
        echo "Something Went Wrong!";
    }
    mysqli_close($conn);
}

?>

<!-- Preventing from resubmission -->
<script>
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
</script>

<?php
include("adminFooter.php");
?>