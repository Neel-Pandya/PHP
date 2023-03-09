<!--4) Write a PHP code to append your enrollment number and address in the file demo.txt. -->
<?php
    $file = fopen('demo.txt','a');
    $enrollment = "\nEnrollment = 21SDSCE01088";
    fwrite($file,$enrollment);
    $address = "\nAddress = chamunda krupa , 4 kanak nagar , Sant kabir road Rajkot - 360003";
    fwrite($file,$address);
    fclose($file);
?>