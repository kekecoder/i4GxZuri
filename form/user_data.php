<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
  // saving user data in csv format
 $file = fopen("userdata.csv", "w");
   fputcsv($file, $_POST);
 fclose($file);
 // retrieving user data
  $users = fopen("userdata.csv", "r");
  $data = fgetcsv($users);
  print_r($data);
  
}