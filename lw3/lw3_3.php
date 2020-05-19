<?php
	header("Content-Type: text/plain");
	$upLetters = ['Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Z', 'X', 'C', 'V', 'B', 'N', 'M'];
	$downLetters = ['q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm'];
	$digits = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
	$password = isset($_GET['password']) ? $_GET['password'] : null;
	$len = strlen($password);
	$digCount = 0;
	$upLett = 0;
	$downLett = 0;
	$access = true;
	for ($i = 0; $i < $len; $i++)
	{ 
		if (in_array($password[$i], $digits))
			$digCount++;
		if (in_array($password[$i], $upLetters))
			$upLett++;
		if (in_array($password[$i], $downLetters))
			$downLett++; 
		if (!in_array($password[$i], $digits) && !in_array($password[$i], $upLetters) && !in_array($password[$i], $downLetters))
			$access = false;
	}
	if ($access)
	{
		$safety = 0;
		for ($i = 0; $i < $len; $i++)
		{
			$counter = 1;
			for ($j = $i + 1; $j < $len; $j++)
			{
				if (($password[$i] == $password[$j]) && ($password[$j] != '-'))
				{
					$counter++;
					$password[$j] = '-';
				}
			}
			if ($counter >= 2)
				$safety -= $counter;
		}
		$safety += 4 * $len + 4 * $digCount;
		if ($upLett != 0)
			$safety += ($len - $upLett) * 2;
		if ($downLett != 0)
			$safety += ($len - $downLett) * 2;
		if (($digCount == $len) || ($upLett + $downLett == $len))
			$safety -= $len;
		echo 'Сложность пароля: ', $safety;
	}
	else
		echo 'В пароле содержатся неподходящие символы';
?>