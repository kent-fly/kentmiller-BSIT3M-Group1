<?php
    if (file_exists("sample")) {
        
        $contents = file_get_contents("sample");
        echo "File Contents: " . $contents;

        $newData = "\nURAAA!!";
        file_put_contents("sample", $newData, FILE_APPEND);
        echo "\nAdded new content :) ";
		
        $lines = file("sample");
        foreach ($lines as $line) {
            echo $line . "<br>";
        }

    } else {

        file_put_contents("sample", "Experiment Time!!!");
        echo "Changed some things around and added new stuff.";
    }
?>
