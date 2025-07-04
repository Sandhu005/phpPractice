<?php

$email = $_POST['email'];
$pwd = $_POST['pwd'];

if($email=="admin@gmail.com" && $pwd=="123"){
    echo "<script>
            window.location.replace('adminIndex.php');
        </script>";
}
else{
    // Wrong Credentials!
    echo "<script>
            alert('Worng Credentials!');
            window.location.assign('login.php');
        </script>";
}
?>