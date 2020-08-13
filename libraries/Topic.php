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
         t.user_id,
         u.*
         FROM replies AS r
         INNER JOIN topics AS t
         ON r.topic_id = t.id
         INNER JOIN users AS u
         ON r.user_id = u.id
         WHERE r.topic_id = $this->topicId
         ORDER BY r.create_date ASC";

        $this->db->query($sql);

        $this->db->bind(':topicId', $this->topicId);
        $resultset = $this->db->resultset();
        return $resultset;
    }

    public function getCategoryById()
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

    public function getUserById()
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

    private function setCategoryId()
    {
        if (isset($_GET['category'])) {
            $this->categoryId = $_GET['category'];
        }
    }

    private function setTopicId()
    {
        if (isset($_GET['id'])) {
            $this->topicId = $_GET['id'];
        }
    }

    private function setUserId()
    {
        if (isset($_GET['user'])) {
            $this->userId = $_GET['user'];
        }
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function getuserId()
    {
        return $this->userId;
    }

    public function create($data)
    {
        $sql = "INSERT INTO topics (category_id, user_id, title, body, last_activity)
        VALUES (:category, :user, :title, :body, :lastActivity)";

        $this->db->query($sql);

        $this->db->bind(':category', $data['category']);
        $this->db->bind(':user', $data['user']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);
        $this->db->bind(':lastActivity', $data['lastActivity']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function reply($data)
    {
        $sql = "INSERT INTO replies (topic_id, user_id, body)
        VALUES (:topic, :user, :body)";

        $this->db->query($sql);

        $this->db->bind(':topic', $data['topicId']);
        $this->db->bind(':user', $data['userId']);
        $this->db->bind(':body', $data['body']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
