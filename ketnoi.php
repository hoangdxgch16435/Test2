<?php

$connection = pg_connect("host=ec2-54-235-86-101.compute-1.amazonaws.com port=5432 dbname=d417ob2n4lkqrd user=ffjjnqkvqbgtdv password=2f8d36a7a380dfc345899711053cdda743a2bee9a633221b537e1d9ca96730e4");  
 if(!$connection) {
     die("Database connection failed");
 }
 ?>
