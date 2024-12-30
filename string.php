<?php
// String operations

$strings = ["Hello", "World", "PHP", "Programming"];

// Function to check if a letter is a vowel
function is_vowel($letter)  {
    if (
        strtolower($letter) === "a" ||
        strtolower($letter) === "e" ||
        strtolower($letter) === "i" ||
        strtolower($letter) === "o" ||
        strtolower($letter) === "u"
        ) {
        return true;
    } else {
        return false;
    }
}

// Foreach: looping through strings array
foreach($strings as $item) {
    // Variable to store vowel count
    $vowel_count = 0;
    // For loop to count vowels
    for ($i = 0; $i < strlen($item); $i++) {
        if (is_vowel($item[$i])) {
            $vowel_count++;
        }
    }
    // String reversed
    $reversed_string = strrev($item);

    // Prints the final result
    echo "Original String: $item, Vowel Count: $vowel_count, Reverse String: $reversed_string\n";
};

?>