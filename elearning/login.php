<?php
include("header.php");
?>

   <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Login Page</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
<div class="row justify-content-center">
    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
        <form action="validate.php" method="post">
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email">
                        <label for="email">Your Email</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter Your Password" name="pwd">
                            <label for="pwd">Your Password</label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
include("footer.php");
?>