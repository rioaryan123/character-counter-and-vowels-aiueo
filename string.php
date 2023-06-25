<!DOCTYPE html>
<html>
<head>
    <title>Character Occurrence Counter</title>
</head>
<body>
    <h1>Character Occurrence Counter</h1>

    <form method="post" action="">
        <label for="string">Enter a string:</label>
        <input type="text" name="string" id="string" required>

        <label for="character">Enter a character:</label>
        <input type="text" name="character" id="character" required>

        <input type="submit" value="Count Occurrences">
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get the string and character input
        $string = $_POST["string"];
        $character = $_POST["character"];

        // Function to count occurrences
        function countCharacterOccurrences($string, $character) {
            $count = 0;
            $length = strlen($string);

            for ($i = 0; $i < $length; $i++) {
                if ($string[$i] === $character) {
                    $count++;
                }
            }

            return $count;
        }

        // Count the occurrences
        $occurrences = countCharacterOccurrences($string, $character);

        // Display the result
        echo "<p>Number of occurrences of '$character' in '$string': $occurrences</p>";
    }
    ?>

</body>
</html>
