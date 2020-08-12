<?php
require_once 'core/init.php';

$title = 'Welcome to TalkingSpace';

$topic = new Topic();
$user = new user();

$template = new Template('templates/homepage.php');

$template->title = $title;

$template->topics = $topic->getAllTopics();
$template->totalUsers = $user->getTotalUsers();
$template->totalCategories = $topic->getTotals('categories');
$template->totalTopics = $topic->getTotals('topics');
$template->totalReplies = $topic->getTotalReplies(1);

echo $template;
