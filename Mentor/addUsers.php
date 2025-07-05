<!-- Header -->
<?php
include("header.php");
?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Add New User Here</h1>
              <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Add User</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- USER FORM -->
    <div class="container">
        <form method="post">
            <div class="row w-50 flex-column my-5 align-items-center">
                <div class="col-md-6">
                    <label for="exampleInputUserName1" class="form-label">User Name</label>
                    <input type="text" name="userName" class="form-control" id="exampleInputUserName1" aria-describedby="nameHelp" required>
                </div>
                <div class="col-md-6 my-4">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="col-md-6">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" required>
                </div>
                <button type="submit" class="col-md-4 btn btn-success mt-4" name="addBtn">Add User</button>
            </div>
        </form>
    </div>

<!-- Adding user to Database -->
<?php
if(isset($_POST['addBtn'])){
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $connect = mysqli_connect("localhost","root","","mentor");
    $query = "INSERT INTO `userdata`(`name`, `email`, `password`) VALUES ('$userName','$email','$pwd')";
    $result = mysqli_query($connect, $query);

    if($result==1){
        echo '<div class="alert alert-success" role="alert">
                User Added Successfully!
            </div>';
    }
    else{
        echo '<div class="alert alert-danger" role="alert">
                Failed To Add User!
            </div>';
    }
    mysqli_close($connect);
}
?>

<!-- Preventing resubmission of page -->
<script>  
if ( window.history.replaceState ) { 
        window.history.replaceState( null, null, window.location.href); 
    } 
</script>

<!-- Footer -->
<?php
include("footer.php");
?>