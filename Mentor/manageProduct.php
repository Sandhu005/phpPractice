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
<main>
    <div class="row justify-content-center mb-5">
        <div class="col-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Catagory</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $num = 1;
                    while ($array = mysqli_fetch_assoc($result)) {
                        echo '<tr>
                                <th scope="row">' . $num . '</th>
                                <td>' . $array["name"] . '</td>
                                <td>' . $array["catagory"] . '</td>
                                <td>' . $array["status"] . '</td>
                            </tr>';
                        echo '<br>';
                        $num++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<!-- Footer -->
<?php
include("adminFooter.php");
?>