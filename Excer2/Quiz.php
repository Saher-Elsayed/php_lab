<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $Answer1 = $_POST["Question1"];
    $Answer2 = $_POST["Question2"];
    $Answer3 = $_POST["Question3"];
    $Answer4 = $_POST["Question4"];
    $Answer5 = $_POST["Question5"];

    echo "1) What is my first name?<br>";
    echo "Your answer: " . $Answer1 . "<br>";
    echo "Correct answer: Saher <br>";

    echo "2) What my father's name?<br>";
    echo "Your answer: " . $Answer2 . "<br>";
    echo "Correct answer: Reda<br>";

    echo "3) What my grandfather's name?<br>";
    echo "Your answer: " . $Answer3 . "<br>";
    echo "Correct answer: Salah<br>";

    echo "4) What my great grandfather's name?<br>";
    echo "Your answer: " . $Answer4 . "<br>";
    echo "Correct answer: Abdel<br>";

    echo "5) What do people call me?<br>";
    echo "Your answer: " . $Answer5 . "<br>";
    echo "Correct answer: Saher<br><br>";

    $add20 = 0;
    if ($Answer1 == "Saher") $add20++;
    if ($Answer2 == "Reda")  $add20++;
    if ($Answer3 == "Salah") $add20++;
    if ($Answer4 == "Abdel") $add20++;
    if ($Answer5 == "Saher") $add20++;
	if (($add20*20)<20) 
	{
  		echo "WOW YOU KNOW NTHING ABOUT ME<br>";

	}
		elseif (($add20*20)<40) 
		{
			echo "atleast you know one thing about me<br>";
		}
		elseif (($add20*20)<60) 
		{
			echo "Atleast you know two thing about me<br>";
		}
		elseif (($add20*20)<60) 
		{
			echo "Lucky guess?<br>";
		}
		elseif (($add20*20)<80) 
		{
			echo "Something is wrong, why do you know my name?<br>";
		}
		else 
		{
			echo "YOU KNOW TOOO MUCH<br>";
		}





	

    echo "Total correct answers: " . $add20 . "<br>";
    echo "Score: " . ($add20 * 20) . "%<br>";
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $Answer1 = $_POST["Question1"];
    $Answer2 = $_POST["Question2"];
    $Answer3 = $_POST["Question3"];
    $Answer4 = $_POST["Question4"];
    $Answer5 = $_POST["Question5"];

    echo "1) What is my first name?<br>";
    echo "Your answer: " . $Answer1 . "<br>";
    echo "Correct answer: Saher <br>";

    echo "2) What my father's name?<br>";
    echo "Your answer: " . $Answer2 . "<br>";
    echo "Correct answer: Reda<br>";

    echo "3) What my grandfather's name?<br>";
    echo "Your answer: " . $Answer3 . "<br>";
    echo "Correct answer: Salah<br>";

    echo "4) What my great grandfather's name?<br>";
    echo "Your answer: " . $Answer4 . "<br>";
    echo "Correct answer: Abdel<br>";

    echo "5) What do people call me?<br>";
    echo "Your answer: " . $Answer5 . "<br>";
    echo "Correct answer: Saher<br><br>";

    $add20 = 0;
    if ($Answer1 == "Saher") $add20++;
    if ($Answer2 == "Reda")  $add20++;
    if ($Answer3 == "Salah") $add20++;
    if ($Answer4 == "Abdel") $add20++;
    if ($Answer5 == "Saher") $add20++;
	if (($add20*20)<20) 
	{
  		echo "WOW YOU KNOW NTHING ABOUT ME<br>";

	}
		elseif (($add20*20)<40) 
		{
			echo "atleast you know one thing about me<br>";
		}
		elseif (($add20*20)<60) 
		{
			echo "Atleast you know two thing about me<br>";
		}
		elseif (($add20*20)<60) 
		{
			echo "Lucky guess?<br>";
		}
		elseif (($add20*20)<80) 
		{
			echo "Something is wrong, why do you know my name?<br>";
		}
		else 
		{
			echo "YOU KNOW TOOO MUCH<br>";
		}





	

    echo "Total correct answers: " . $add20 . "<br>";
    echo "Score: " . ($add20 * 20) . "%<br>";
