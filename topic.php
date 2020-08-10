<?php include 'core/init.php' ?>

<?php

$topic = new Topic();

$topicId = $_GET["id"] ?? null;

$template = new Template('templates/ftopic.php');

if ($topicId) {
    $template->topicId = $topicId;
    //$template->title = $topic->getTopicById()->category;
    $template->topic = $topic->getTopicById();
}

$template->userId = $topic->getTopicById()->user_id;
$template->totalReplies = $topic->getTotalReplies();
$template->replies = $topic->getReplies();

echo $template;
