<?php
class Validator
{
    public function isRequired($fieldArray)
    {
        foreach ($fieldArray as $field) {
            if ($_POST['' . $field . ''] == '') {
                return false;
            }
        }
        return true;
    }

    public function isValidEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public function passwordsMatch($pw1, $pw2)
    {
        if ($pw1 !== $pw2) {
            return false;
        } else {
            return true;
        }
    }
}
