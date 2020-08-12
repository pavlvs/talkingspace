<?php
class User
{
    //Init DB Variable
    private $db;

    /*
     *    Constructor
     */
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTotalUsers()
    {
        $sql = 'SELECT * FROM users';
        $this->db->query($sql);
        $rows = $this->db->resultset();
        return $this->db->rowCount();
    }

    /*
     * Register User
     */
    public function register($data)
    {
        //Insert Query
        $this->db->query('INSERT INTO users (name, email, avatar, username, password, about, last_activity)
											VALUES (:name, :email, :avatar, :username, :password, :about, :last_activity)');
        //Bind Values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':avatar', $data['avatar']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password1']);
        $this->db->bind(':about', $data['about']);
        $this->db->bind(':last_activity', $data['lastActivity']);
        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
        //echo $this->db->lastInsertId();
    }

    /*
     * Upload User Avatar
     */
    public function uploadAvatar()
    {
        // check that the avatar field is not empty before proceeding
        if (!empty($_FILES['avatar']['name'])) {
            $allowedExts = array("gif", "jpeg", "jpg", "png");
            $temp = explode(".", $_FILES["avatar"]["name"]);
            $extension = end($temp);
            if ((($_FILES["avatar"]["type"] == "image/gif")
                    || ($_FILES["avatar"]["type"] == "image/jpeg")
                    || ($_FILES["avatar"]["type"] == "image/jpg")
                    || ($_FILES["avatar"]["type"] == "image/pjpeg")
                    || ($_FILES["avatar"]["type"] == "image/x-png")
                    || ($_FILES["avatar"]["type"] == "image/png"))
                && ($_FILES["avatar"]["size"] < 100000)
                && in_array($extension, $allowedExts)
            ) {
                if ($_FILES["avatar"]["error"] > 0) {
                    redirect('register.php', $_FILES["avatar"]["error"], 'error');
                } elseif (file_exists("templates/assets/images/" . $_FILES["avatar"]["name"])) {
                    redirect('register.php', 'File already exists', 'error');
                } else {
                    move_uploaded_file(
                        $_FILES["avatar"]["tmp_name"],
                        "templates/assets/images/" . $_FILES["avatar"]["name"]
                    );

                    return true;
                }
            } else {
                redirect('register.php', 'Invalid File Type!', 'error');
            }
        } else {
            return true;
        }
    }

    public function login($un, $pw)
    {
        $sql = "SELECT *
                FROM users
                WHERE username = :username
                AND `password` = :password";

        $this->db->query($sql);

        $this->db->bind(':username', $un);
        $this->db->bind(':password', $pw);
        $this->db->execute();

        $row = $this->db->single();
        if ($row) {
            $this->setUserData($row);
            return true;
        } else {
            return false;
        }
    }

    public function logout()
    {
        unset($_SESSION['isLoggedIn']);
        unset($_SESSION['userId']);
        unset($_SESSION['username']);
        unset($_SESSION['name']);

        redirect('index.php', 'You have been logged out', 'success');
        session_destroy();
    }

    public function setUserData($row)
    {
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['userId'] = $row->id;
        $_SESSION['username'] = $row->username;
        $_SESSION['name'] = $row->name;
    }
}
