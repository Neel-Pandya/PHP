<!--3) Write a PHP Code to create a file demo.txt and write your name into the file demo.txt -->
<?php
    $file = fopen('demo.txt','w');
    $text = "Pandya Neel\n";
    fwrite($file,$text);
    fclose($file);
?>