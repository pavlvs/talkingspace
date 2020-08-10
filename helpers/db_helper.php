<?php

function replyCount($topicId)
{
    $db = new Database();
    $sql = 'SELECT * FROM topics
            WHERE id = :topicId';
    $db->query($sql);
    $db->bind(':topicId', $topicId);
    $rows = $db->resultset();

    return $db->rowCount();
}

function getCategories()
{
    $db = new Database();
    $sql = 'SELECT * FROM categories';
    $db->query($sql);
    $resultset = $db->resultset();
    return $resultset;
}

function getCategoryId()
{
    if (isset($_GET['category'])) {
        $categoryId = $_GET['category'];
        return $categoryId;
    }
    return false;
}

function getTotalTopicsByUser($userId)
{
    $db = new Database();
    $sql = "SELECT *
                FROM topics
                WHERE user_id = :userId";
    $db->query($sql);
    $db->bind(':userId', $userId);
    $rows = $db->resultset();
    return $db->rowCount();
}

function userPostCount($userId)
{
    $db = new Database();
    $sql = "SELECT *
                FROM topics
                WHERE user_id = :userId";
    $db->query($sql);
    $db->bind(':userId', $userId);
    $rows = $db->resultset();
    $topicCount = $db->rowCount();

    $sql = "SELECT *
                FROM replies
                WHERE user_id = :userId";
    $db->query($sql);
    $db->bind(':userId', $userId);
    $rows = $db->resultset();
    $repliesCount = $db->rowCount();
    return $topicCount + $repliesCount;
}
