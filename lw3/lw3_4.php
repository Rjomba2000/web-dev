<?php
    if (!isset($_GET['email']))
    {
        echo 'Не введён email';
    }
    else
    {
        $email = $_GET['email'];
        $fPerson = fopen('data/'. $email.'.txt','w');
        $first_name = isset($_GET['first_name']) ? $_GET['first_name'] : null;
        $last_name = isset($_GET['last_name']) ? $_GET['last_name'] : null;
        $age = isset($_GET['age']) ? $_GET['age'] : null;
        fwrite($fPerson, 'First Name: '.$first_name."\r\n");
        fwrite($fPerson, 'Last Name: '.$last_name."\r\n");
        fwrite($fPerson, 'Email: '.$email."\r\n");
        fwrite($fPerson, 'Age: '.$age."\r\n");
        fclose($fPerson);
    }
?>
