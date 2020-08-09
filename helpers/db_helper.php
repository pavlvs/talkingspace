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
