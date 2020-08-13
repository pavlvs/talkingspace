<?php
require_once 'core/init.php';

$topic = new Topic();
$validate = new Validator();

$topicId = $_GET["id"] ?? null;

$template = new Template('templates/ftopic.php');

if ($topicId) {
    $template->topicId = $topicId;
    //$template->title = $topic->getTopicById()->category;
    $template->topic = $topic->getTopicById();
}

if (isset($_POST['doReply'])) {
    // get the post data
    $data = [];
    $data['body'] = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_STRING);
    $data['userId'] = $_SESSION['userId'];
    $data['topicId'] = filter_input(INPUT_POST, 'topicId', FILTER_VALIDATE_INT);

    //validate the data
    $requiredFields = ['body'];

    $tId = urlencode($data['topicId']);

    if (!$validate->isRequired($requiredFields)) {
        redirect("topic.php?id=$tId", 'Please fill out the reply field.', 'error');
    } else {
        if ($topic->reply($data)) {
            redirect("topic.php?id=$tId", 'Reply added', 'success');
        } else {
            redirect("topic.php?id=$tId", 'Could not add reply', 'error');
        }
    }
}

$template->userId = $topic->getTopicById()->user_id;
$template->totalReplies = $topic->getTotalReplies();
$template->replies = $topic->getReplies();

echo $template;
