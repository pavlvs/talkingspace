 <?php
    function redirect($page = FALSE, $message = NULL, $messageType = NULL)
    {
        $location = '';
        if (is_string($page)) {
            $location = $page;
        } else {
            $location = $_SERVER["SCRIPT_NAME"];
        }
        // echo "deed is done and we are going to " . $location;
        // exit();

        // check for message
        if ($message != NULL) {
            // set message
            $_SESSION["message"] = $message;
        }
        // check for type
        if ($messageType != NULL) {
            // set message type
            $_SESSION['messageType'] = $messageType;
        }

        // redirect
        header("Location: $location");
        exit;
    }

    function displayMessage()
    {
        if (!empty($_SESSION['message'])) {

            // assign message variable
            $message = $_SESSION['message'];

            if (!empty($_SESSION['messageType'])) {

                // assign type variable
                $messageType = $_SESSION['messageType'];
                // create output
                if ($messageType == 'error') {
                    echo '<div class="alert alert-danger">' . $message . '</div>';
                } else {
                    echo '<div class="alert alert-success">' . $message . '</div>';
                }
            }
            unset($_SESSION['message']);
            unset($_SESSION['messageType']);
        } else {
            echo '';
        }
    }

    function isLoggedIn()
    {
        if (isset($_SESSION['isLoggedIn'])) {
            return true;
        } else {
            return false;
        }
    }

    function isActiveCategory($category)
    {
        if (
            isset($_GET['category'])
            && $_GET['category'] == $category
        ) {
            return true;
        } else {
            return false;
        }
    }
