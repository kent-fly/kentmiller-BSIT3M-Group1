<?php
    if (file_exists("exercise1.php")) {
        
        $contents = file_get_contents("exercise1.php");
        echo "File Contents: " . $contents;

        $newData = "\nURAAA!!";
        file_put_contents("exercise1.php", $newData, FILE_APPEND);
        echo "\nAdded new content :) ";
		
        $lines = file("exercise1.php");
        foreach ($lines as $line) {
            echo $line . "<br>";
        }

    } else {

        file_put_contents("exercise1.php", "Initial file content.");
        echo "Changed some things around and added new stuff.";
    }
?>
