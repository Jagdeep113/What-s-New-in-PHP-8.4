<?php 

try {
    throw new Exception("Something went wrong!");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage(); // Outputs: Error: Something went wrong!
    echo "\nFile: " . $e->getFile(); // Outputs the file where the exception was thrown
    echo "\nLine: " . $e->getLine(); // Outputs the line number where the exception was thrown
}
