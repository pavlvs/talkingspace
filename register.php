<?php
require_once 'core/init.php';
//create topic object
$topic = new Topic();

//create user object
$user = new User();

if (isset($_POST['register'])) {
    // create data array
    $data = [];
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['username'] = $_POST['username'];
    $data['password1'] = md5($_POST['password1']);
    $data['password2'] = md5($_POST['password2']);
    $data['about'] = $_POST['about'];
    $data['lastActivity'] = date('Y-m-d H:i:s');

    // upload avatar
    if ($user->uploadAvatar()) {
        $data['avatar'] = $_FILES['avatar']['name'];
    } else {
        $data['avatar'] = 'noimage.jpg';
    }
    // register the user
    if ($user->register($data)) {
        redirect('index.php', 'You are registered and can now log in.', 'success');
    } else {
        redirect('register.php', 'Something went wrong with registration', 'error');
    }
}

$template = new Template('templates/register.php');

echo $template;
