<?php
    if (!isset($_GET['email']))
    {
        echo 'Не введён email';
    }
    else
    {
        $email = $_GET['email'];
        if (file_exists('data/'.$email.'.txt'))
        {
            $fPerson = fopen('data/'.$email.'.txt', 'r');
            while (!feof($fPerson))
            {
                $mytext = fgets($fPerson, 999);
                echo $mytext."<br />";
            }
        }
        else
        {
            echo 'Человека с таким email не существует';
        }
    }
?>
