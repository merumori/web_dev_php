<?php

	function check_prime($input)
	{
		if ($input == 1)
		return 0;
	
		for ($i = 2; $i <= $input/2; $i++)
		{
			if ($input % $i == 0)
			return 0;
		}
		
		return 1;
	}



    $input = (int)$_POST['number'];

	$check = check_prime($input);
	
	if ($check == 1){
         echo "$input is a prime number.";
    }
	else{
            echo "$input is not a prime number.";
    }


?>

<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h1>Prime Number Checker</h1>
    <form method="post">
        Enter a positive integer: <input type="text" name="number">
        <input type="submit" value="Check">
    </form>
</body>
</html>
