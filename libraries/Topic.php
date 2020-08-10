<?php
class Topic
{
    private $db;
    private $categoryId;
    private $topicId;
    private $userId;

    public function __construct()
    {
        $this->db = new Database();
        $this->setCategoryId();
        $this->setTopicId();
        $this->setUserId();
    }

    public function getAllTopics()
    {
        $sql = 'SELECT t.*,
         u.username AS username,
         u.avatar AS avatar,
         c.name AS category
        FROM topics AS t
        INNER JOIN categories AS c
        ON t.category_id = c.id
        INNER JOIN users as u
        ON t.user_id = u.id
        ORDER BY t.create_date DESC';

        $this->db->query($sql);
        $resultset = $this->db->resultset();
        return $resultset;
    }

    public function getTopicsByCategory()
    {
        $sql = "SELECT t.*,
         u.username AS username,
         u.avatar AS avatar,
         c.name AS category
        FROM topics AS t
        INNER JOIN categories AS c
        ON t.category_id = c.id
        INNER JOIN users as u
        ON t.user_id = u.id
        WHERE c.id = $this->categoryId
        ORDER BY t.create_date DESC";

        $this->db->query($sql);
        $resultset = $this->db->resultset();
        return $resultset;
    }

    public function getTopicsByUser()
    {
        $sql = "SELECT t.*,
         u.username AS username,
         u.avatar AS avatar,
         c.name AS category
        FROM topics AS t
        INNER JOIN categories AS c
        ON t.category_id = c.id
        INNER JOIN users as u
        ON t.user_id = u.id
        WHERE t.user_id = :userId
        ORDER BY t.create_date DESC";

        $this->db->query($sql);
        $this->db->bind(':userId', $this->userId);
        $resultset = $this->db->resultset();
        return $resultset;
    }

    public function getReplies()
    {
        $sql = "SELECT r.*,
         u.*
         FROM replies AS r
         INNER JOIN users AS u
         ON r.user_id = u.id
         WHERE r.topic_id = 1
         ORDER BY create_date ASC";

        $this->db->query($sql);

        $this->db->bind(':topicId', $this->topicId);
        $resultset = $this->db->resultset();
        return $resultset;
    }

    function getCategoryById()
    {
        $sql = "SELECT *
                FROM categories
                WHERE id = $this->categoryId";
        $this->db->query($sql);
        $category = $this->db->single();
        return $category;
    }

    public function getTopicById()
    {
        $sql = "SELECT t.*,
         u.id AS userId,
         u.username AS username,
         u.avatar AS avatar,
         c.name AS category
        FROM topics AS t
        INNER JOIN categories AS c
        ON t.category_id = c.id
        INNER JOIN users as u
        ON t.user_id = u.id
        WHERE t.id = $this->topicId";

        $this->db->query($sql);
        $record = $this->db->single();
        return $record;
    }


    function getUserById()
    {
        $sql = "SELECT *
                FROM users
                WHERE id = $this->userId";
        $this->db->query($sql);
        $user = $this->db->single();
        return $user;
    }
    public function getTotalTopics()
    {
        $sql = 'SELECT * FROM topics';
        $this->db->query($sql);
        $rows = $this->db->resultset();
        return $this->db->rowCount();
    }


    public function getTotalCategories()
    {
        $sql = 'SELECT * FROM categories';
        $this->db->query($sql);
        $rows = $this->db->resultset();
        return $this->db->rowCount();
    }

    public function getTotalReplies()
    {
        $sql = "SELECT * FROM replies
                WHERE topic_id = :topicId";
        $this->db->query($sql);

        $this->db->bind(':topicId', $this->topicId);
        $rows = $this->db->resultset();
        return $this->db->rowCount();
    }

    public function getTotals($table)
    {
        $sql = 'SELECT * FROM ' . $table;
        $this->db->query($sql);
        $rows = $this->db->resultset();
        return $this->db->rowCount();
    }

    function setCategoryId()
    {
        if (isset($_GET['category'])) {
            $this->categoryId = $_GET['category'];
        }
    }

    function setTopicId()
    {
        if (isset($_GET['id'])) {
            $this->topicId = $_GET['id'];
        }
    }

    function setUserId()
    {
        if (isset($_GET['user'])) {
            $this->userId = $_GET['user'];
        }
    }

    function getCategoryId()
    {
        return $this->categoryId;
    }

    function getuserId()
    {
        return $this->userId;
    }
}
