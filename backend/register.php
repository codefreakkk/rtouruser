<?php
include "../dbcon.php";
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

$sql = "INSERT INTO `user` (`uname`, `upass`) VALUES ('$uname', '$pass')";
$result = mysqli_query($con, $sql);

if($result) {
    echo 1;
} else {
    echo 0;
}

?>