<?php
  header("Content-Type: text/plain");
  
  $st = $_GET["name"];
  $dl = strlen($st);
  $cif = array('0','1','2','3','4','5','6','7','8','9');
  $er = false;
  $buk = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
  for ($i = $dl-1; $i >= 0; $i--)
  {
    if (!(in_array($st[$i], $cif)) and !(in_array($st[$i], $buk)))
    {
       $er = true; 
    }
  }
  if (in_array($st[0], $cif))
  {
    $er = true;
  }
  if ($er === true)
  {
    echo "Не идентификатор";
  }
  else
  {
    echo "Идентификатор";
  }
?>