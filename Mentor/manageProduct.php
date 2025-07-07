<!-- Header -->
<?php
include("adminHeader.php");
?>

<!-- Fetching Data from Database -->
<?php
$conn = mysqli_connect("localhost", "root", "", "mentor");
$query = "SELECT * FROM `product`";
$result = mysqli_query($conn, $query);
?>

<!-- DATA TABLE -->
<div class="container-fluid">
    <!-- GET URL MSG -->
    <?php
    if (isset($_GET['msg'])) {
        echo '<div class="alert alert-success" role="alert">' . $_GET["msg"] . '</div>';
    }
    ?>
    <div class="row justify-content-center mb-5">
        <div class="col-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Catagory</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $num = 1;
                    while ($array = mysqli_fetch_assoc($result)) {
                        echo '<tr>
                                <td>' . $num . '</td>
                                <td>' . $array["catagory"] . '</td>
                                <td>' . $array["name"] . '</td>
                                <td>' . $array["status"] . '</td>
                                <td><a href="updateProduct.php?id=' . $array["id"] . '">Update</a> | <a href="deleteProduct.php?id='.$array['id'].'">Delete</a></td>
                            </tr>';
                        echo '<br>';
                        $num++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Footer -->
<?php
include("adminFooter.php");
?>