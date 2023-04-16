<?php

require_once 'database.php';
$db = new database();

session_start();
$kamer_code = $_GET['kamer_code'];
$klant_code = $_SESSION['klant_code'];


$date = date('Y-m-d');

$act = $db->select("SELECT * FROM reservering WHERE klant_code=$klant_code");

session_abort();

include 'table_generators/table_generator_overzicht.php';

create_table($act, 'kamer');

?>
    <a href="log_out.php" class="btn btn-danger">Log Out</a> <br> <br>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<button class="btn btn-secondary"onclick="window.print()">Print this page</button>

