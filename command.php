<?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['command'])) {
            $command = $_POST['command'];

            $fileReadPattern = "/\w+\s{1}[\/\w\/\.]+$/";
            $fileListPattern = "/^\w+\s*\-*\w*$/";

            if (preg_match($fileReadPattern, $command) || preg_match($fileListPattern, $command)) {
                echo system($command);
            }
            else {
                echo "Can only read file and list file";
            }
        }
    }
?>