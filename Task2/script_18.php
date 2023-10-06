<!DOCTYPE html>
<html>
<head>
    <title>Guess the Number</title>
</head>
<body>
    <h1>Guess the Number Game</h1>

    <p>Guess a number between 1 and 10:</p>
    <form method="post" action="<?php ($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="guess">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    
    $rn = rand(1, 10);

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $userGuess = $_POST["guess"];

        
        if (is_numeric($userGuess)) {
            
            if ($userGuess == $rn) {
                echo "<p>Congratulations! You guessed the correct number: $rn</p>";
            } else {
                echo "<p>Sorry, that's not correct. The correct number was $rn</p>";
            }
        } else {
            echo "<p>Please enter a valid number between 1 and 10.</p>";
        }
    }
?>
