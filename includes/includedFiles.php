<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
    include "includes/config.php";
    include "includes/classes/User.php";



    if(isset($_GET['userLoggedIn'])){
        $userLoggedIn = new User($con, $_GET['userLoggedIn']);
    } else {
        echo "username variable was not passed into the page. Check the openPage Js function";
    }

}else {
    include('includes/header.php');
    include('includes/footer.php');

    $url = $_SERVER['REQUEST_URI'];
    echo "<script>openPage('$url')</script>";
    exit();
}
?>