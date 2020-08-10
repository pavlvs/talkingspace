<?php include 'core/init.php' ?>

<?php

$topic = new Topic();

$category = $_GET["category"] ?? null;
$user = $_GET["user"] ?? null;

$template = new Template('templates/topics.php');

if ($category) {
    $template->categoryId = $topic->getCategoryId();
    $template->title = 'Topics in ' . $topic->getCategoryById()->name;
    $template->topics = $topic->getTopicsByCategory();
} elseif ($user) {
    // $template->userId = $topic->getUserId();
    $template->title = 'Topics by ' . $topic->getUserById()->username;
    $template->topics = $topic->getTopicsByUser();
} else {
    $template->title = ' All Topics';
    $template->topics = $topic->getAllTopics();
}
$template->totalUsers = $topic->getTotals('users');
$template->totalCategories = $topic->getTotals('categories');
$template->totalTopics = $topic->getTotals('topics');
$template->totalReplies = $topic->getTotalReplies(1);

echo $template;
