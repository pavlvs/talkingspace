<?php include 'core/init.php' ?>

<?php

$topic = new Topic();

$category = $_GET["category"] ?? null;

$template = new Template('templates/topics.php');

if ($category) {
    $template->categoryId = $topic->getCategoryId();
    $template->title = 'Topics in ' . $topic->getCategoryById()->name;
    $template->topics = $topic->getTopicsByCategory();
} else {
    $template->title = ' All Topics';
    $template->topics = $topic->getAllTopics();
}
$template->totalUsers = $topic->getTotals('users');
$template->totalCategories = $topic->getTotals('categories');
$template->totalTopics = $topic->getTotals('topics');
$template->totalReplies = $topic->getTotalReplies(1);

echo $template;
