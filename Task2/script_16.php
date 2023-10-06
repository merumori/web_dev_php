<?php
	$sentence = "This is vovel";
	
	function vowelcount($sentence){
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;
	
	
    for ($i = 0; $i < strlen($sentence); $i++) {
        if (in_array($sentence[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
	}
	
	$vowel = vowelcount($sentence);
    echo "Number of vowels in the sentence: $vowel";
	
?>
