<?php
class Topic
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
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

    public function getTotalReplies($topicId)
    {
        $sql = "SELECT * FROM replies
                WHERE topic_id = $topicId";
        $this->db->query($sql);
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
}
