<?php
include 'core/init.php';

$user = new user();

if (isset($_POST['doLogout'])) {
    $user->logout();
} else {
    redirect('index.php');
}
