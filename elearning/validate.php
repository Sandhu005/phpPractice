<?php

$email = $_POST['email'];
$pwd = $_POST['pwd'];

if($email=="admin@gmail.com" && $pwd=="123"){
    echo "<script>
            window.location.replace('admin.php?msg=Welcome, Admin!');
        </script>";
}
else{
    // Wrong Credentials!
    echo "<script>
            alert('Worng Credentials!');
            window.location.assign('404.php');
        </script>";
}
?>