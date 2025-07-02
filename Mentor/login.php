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
              <h1>Login Page</h1>
              <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">login</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <div class="container">
        <form action="validate.php" method="post">
            <div class="row w-50 flex-column my-5 align-items-center">
                <div class="col-md-6">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="col-md-6 mt-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="col-md-4 btn btn-success mt-4">Login</button>
            </div>
        </form>
    </div>
<?php
include("footer.php")
?>