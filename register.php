<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'database.php';
    $db = new database();
    session_start();

    $sql = "INSERT INTO klant VALUES (:klant_code, :username, :password, :klant_naam, :adres, :plaats, :postcode, :telefoon)";

   
    $placeholders = [
        'klant_code' => NULL,
        'username' => $_POST['username'],
        'password' =>password_hash($_POST['password'], PASSWORD_DEFAULT),
        'klant_naam'=> $_POST['klant_naam'],
        'adres'=> $_POST['adres'],
        'plaats'=> $_POST['plaats'],
        'postcode'=> $_POST['postcode'],
        'telefoon'=> $_POST['telefoon']
        ];
            $db->insert($sql, $placeholders);
            header("location: login-klant.php");
                   
    }



?>

<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Gegevens</title>
</head>

<body>

<div class="card text-center">
  <div class="card-header">
    <div class="card-body">
        <h2 class="text-muted">Maak een account aan</h2>
</div>
    <form method="POST">
        <input type="text" name="username" placeholder="username" required> <br><br>
        <input type="password" name="password" placeholder="paasword" required> <br><br>
        <input type="text" name="klant_naam" placeholder="naam" required> <br><br>
        <input type="text" name="adres" placeholder="adres" required> <br><br>
        <input type="text" name="plaats" placeholder="plaats" required> <br><br>
        <input type="text" name="postcode" placeholder="postcode" required> <br><br>
        <input type="text" name="telefoon" placeholder="telefoon" required> <br><br>
        <input class="btn btn-primary" type="submit" value="Register">
    </form>

</div>
    </div>
        </div>

    <br>
      <br>
        <br>
    
</body>
</html>
