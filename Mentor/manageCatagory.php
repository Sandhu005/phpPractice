<?php
include("adminHeader.php");
?>

<main>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "mentor");
    $query = "SELECT * FROM `coursecatagory`";
    $result = mysqli_query($conn, $query);

    ?>

    <div class="container-fluid">

        <!-- TABLE -->
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Catagory Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Manage</th>

                        </tr>
                    </thead>
                    <tbody>
                            <?php
                            $num =1;
                            while($array = mysqli_fetch_assoc($result)){
                            echo ' <tr><th scope="row">'.$num.'</th>
                                    <td>'.$array['name'].'</td>
                                    <td>'.$array['status'].'</td>
                                    <td><button>Edit</button><button>Delete</button></td></tr>';
                                    $num++;
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
include("adminFooter.php");
?>