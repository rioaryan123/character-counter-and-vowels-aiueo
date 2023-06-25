<?php
function countAndDisplayVowelsInName($name) {
    $vowels = ['A', 'I', 'U', 'E', 'O'];
    $name = strtoupper($name); // Convert the name to uppercase for case-insensitive comparison
    $vowelCount = 0;
    $foundVowels = [];
  
    // Loop through each character in the name
    for ($i = 0; $i < strlen($name); $i++) {
        $char = $name[$i];
        if (in_array($char, $vowels)) {
            $vowelCount++;
            $foundVowels[] = $char;
        }
    }
  
    // Display the vowel count
    echo "The number of vowels in the name '$name' is: $vowelCount<br>";
  
    // Display the found vowels
    if ($vowelCount > 0) {
        echo "The vowels found in the name are: " . implode(', ', $foundVowels);
    } else {
        echo "No vowels found in the name.";
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the submitted name from the form
    $name = $_POST["name"];
  
    // Validate the name (optional)
    if (!empty($name)) {
        // Call the function to count and display vowels in the name
        countAndDisplayVowelsInName($name);
    } else {
        echo "Please enter a name.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Count Vowels in Name</title>
</head>
<body>
    <h1>Count Vowels in Name</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
