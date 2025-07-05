<?php
include("adminHeader.php");
?>

 <div class="container">
        <form method="post">
            <div class="row w-50 flex-column my-5 align-items-center">
                <div class="col-md-6">
                    <label for="exampleInputCatagoryName" class="form-label">Catagory Name</label>
                    <input type="text" name="catagoryName" class="form-control" id="exampleInputUserName1" aria-describedby="nameHelp" required>
                </div>
                <button type="submit" class="col-md-4 btn btn-success mt-4" name="addBtn">Add Catagory</button>
            </div>
        </form>
    </div>

<?php

// Adding to database
if(isset($_POST['addBtn'])){
    $name = $_POST['catagoryName'];

    $conn = mysqli_connect("localhost", "root", "", "mentor");
    $query = "INSERT INTO `courseCatagory`(`name`) VALUES ('$name')";
    $result = mysqli_query($conn, $query);

    if($result==1){
        echo "Data Added Successfully!";
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