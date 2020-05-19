<?php
  header("Content-Type: text/plain");
  
  $st = $_GET["name"];
  $dl = strlen($st);
  $start = 'n';
  $spwas = 'n';
  for ($i = 0; $i < $dl; $i++)
  {
    if ($st[$i] !== ' ')
    {  
      $start = 'y';
    }
    if ($start === 'y')
    {
      if ($st[$i] === ' ')
      {
        $spwas = 'y';
      }
      else
      {
        if ($spwas === 'y')
        {
          $spwas = 'n';
          echo ' ';
        }
        echo $st[$i];
      }
    }
  }
?>