<?php
   

   $connection = mysqli_connect('localhost', 'root', '112358', 'loginapp');
    if(!$connection) {
        die("Database connection failed");
    }
