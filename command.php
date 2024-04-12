<?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['command'])) {
            $command = $_POST['command'];
            $message = "Use only 'ls' and 'cat'";

            
            if (strpos($command, "ls") == 0 || strpos($command, "cat") == 0) {
                $message = system($command);
            }

            echo "$message";
        }
    }
?>