<?php  
    
	function fact($n)  
    {  
        if($n <= 1)   
        {  
            return 1;  
        }  
        else   
        {  
            return $n * fact($n - 1);  
        }  
    }  
     
	 $n = $_POST['number'];
	 
    echo "Factorial of $n is " .fact($n); 
	
?>  

<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h1>Factorial Calculator</h1>
    <form method="POST">
        Enter a number: <input type="number" name="number" required>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>