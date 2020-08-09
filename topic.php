<?php include 'core/init.php' ?>

<?php

$topic = new Topic();

$template = new Template('templates/ftopic.php');

$template->topics = $topic->getAllTopics();
$template->totalUsers = $topic->getTotals('users');
$template->totalCategories = $topic->getTotals('categories');
$template->totalTopics = $topic->getTotals('topics');
$template->totalReplies = $topic->getTotalReplies(1);

echo $template;
