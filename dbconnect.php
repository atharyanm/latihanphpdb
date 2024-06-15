<?php
    $server = 'localhost:3306';//localhost:3306
    $username = 'root';
    $password = '';
    $namadb = 'lat13pweb';

   $k = new mysqli($server, $username, $password, $namadb);
   if($k->connect_errno)
   {
        echo "failed ", $k->connect_error;
        exit();
   }