<?php
include 'core/init.php';

if (isset($_POST['doLogin'])) {
    //get post vars
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));

    //create user object
    $user = new User();
    if ($user->login($username, $password)) {
        redirect('index.php', 'Full steam ahead ' . $_SESSION['username'] . '!', 'success');
    } else {
        //problem in paradise
        redirect('index.php', 'Oops! Invalid credentials. Please try again', 'error');
    }
} else {
    //no business being here, bye!
    redirect('index.php');
}
