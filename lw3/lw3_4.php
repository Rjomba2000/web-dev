<?php
  if (!isset($_GET['email']))
  {
    echo 'Не введён email';
  }
  else
  {
    $email = $_GET['email'];
    $fPerson = fopen('data/'. $email. '.txt', 'w');
    $first_name = isset($_GET['first_name']) ? $_GET['first_name'] : null;
    $last_name = isset($_GET['last_name']) ? $_GET['last_name'] : null;
    $age = isset($_GET['age']) ? $_GET['age'] : null;
    fwrite($fPerson, 'Имя: ');
    $fNameWrite = fwrite($fPerson, $first_name);
    if (!$fNameWrite)
    {
      fwrite($fPerson, 'Данные не введены');
    }
    fwrite($fPerson, "\r\n");
    fwrite($fPerson, 'Фамилия: ');
    $fNameWrite = fwrite($fPerson, $last_name);
    if (!$fNameWrite)
    {
      fwrite($fPerson, 'Данные не введены');
    }
    fwrite($fPerson, "\r\n");
    fwrite($fPerson, 'Возраст: ');
    $fNameWrite = fwrite($fPerson, $age);
    if (!$fNameWrite)
    {
      fwrite($fPerson, 'Данные не введены');
    }
    fwrite($fPerson, "\r\n");
    fclose($fPerson);
  }
?>
