<?php
require_once 'core/init.php';
$template = new Template('templates/create.php');

$topic = new Topic();
$validate = new Validator();

if (isset($_POST['doCreate'])) {
    // get the post data
    $data = [];
    $data['title'] = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    if (isset($_POST['category']) && !empty($_POST["category"])) {
        $data['category'] = $_POST['category'];
    }
    $data['user'] = $_SESSION['userId'];
    $data['body'] = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_STRING);
    $data['lastActivity'] = date('Y-m-d H:i:s');

    //validate the data
    $requiredFields = ['title', 'category', 'body'];

    if (!$validate->isRequired($requiredFields)) {
        redirect('create.php', 'Please complete all required fields.', 'error');
    } else {
        if ($topic->create($data)) {
            redirect('index.php', 'Topic added.', 'success');
        } else {
            redirect('create.php', 'Could not add topic', 'error');
        }
    }
}



$template->title = 'Add a Topic';
$template->categories = getCategories();

echo $template;
