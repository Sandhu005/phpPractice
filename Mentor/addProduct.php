<!-- Header -->
<?php
include("adminHeader.php");
?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Add Products</h1>
              <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="adminIndex.php">Dashboard</a></li>
            <li class="current">Add Product</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Product FORM -->
    <div class="container">
        <form method="post">
            <div class="row w-50 flex-column my-5 align-items-center">
                <div class="col-md-6">
                    <label for="exampleInputProductName" class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputProducttName" aria-describedby="nameHelp" required>
                </div>
                <div class="col-md-6 my-4">
                    <label for="exampleInputCatagory" class="form-label">Catagory</label>
                    <input type="text" name="catagory" class="form-control" id="exampleInputCatagory" aria-describedby="catagoryHelp" required>
                </div>
                <button type="submit" class="col-md-4 btn btn-success mt-4" name="addBtn">Add Product</button>
            </div>
        </form>
    </div>
</main>

<!-- Adding To Database -->
 <?php
if(isset($_POST['addBtn'])){
    $name = $_POST['name'];
    $catagory = $_POST['catagory'];
    $conn = mysqli_connect("localhost", "root", "", "mentor");
    $query = "INSERT INTO `product`(`name`, `catagory`) VALUES ('$name', '$catagory')";
    $result = mysqli_query($conn, $query);

    if($result==1){
        echo "Product Added Successfully!";
    }
    else{
        echo "Something went wrong!";
    }
    mysqli_close($conn);
}
 ?>

<!-- Preventing submission on reload -->
 <script>
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
 </script>

<!-- Footer -->
<?php
include("adminFooter.php");
?>