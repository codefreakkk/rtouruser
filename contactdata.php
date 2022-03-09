<?php
    include 'dbcon.php';
    echo "yes";
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        $number = $_POST['number'];
        $package = $_POST['package'];
        $more = $_POST['more'];
        if(!empty($name) && !empty($number) && !empty($package) && !empty($more)) {
            $sql = "INSERT INTO `reg` (`name`, `ph`, `package`, `message`) VALUES ('$name', '$number', '$package', '$more')";
            $result = mysqli_query($con, $sql);
         }
        
        header('location:https://www.adventurediaries.in/');
    }
    
?>