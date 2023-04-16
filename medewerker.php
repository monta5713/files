<?php

require_once 'database.php';
$db = new database();

$act = $db->select("SELECT * FROM reservering");

include 'table_generators/table_generator_admin.php';
create_table($act, 'kamer');

$date_today = date('Y-m-d');

$aantal_dagen = $db->select("SELECT COUNT(kamers.kamer_code) FROM kamers 
INNER JOIN reservering ON kamers.kamer_code = reservering.kamer_code
 WHERE reservering.van = CURRENT_DATE");

 foreach($aantal_dagen as $aantal) {
   foreach($aantal as $aant) {

   }
 }
    echo "Het aantal geboekte kamers voor vandaag is: " . $aant; ?> <br><br> 
 




  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<button class="btn btn-secondary"onclick="window.print()">Print this page</button>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">
        <h2 class="text-muted">Admin</h2>

              
                <br><br>

                <a href="log_out.php" class="btn btn-danger">Uitloggen</a>

        </div>
    </div>
 </div>


</body>
</html>