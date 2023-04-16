<?php
    include_once "database.php";
    $db = new database();
  
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $reserverings_code = trim($_POST['reserverings_code']);
            $van = trim($_POST['van']);
            $tot = trim($_POST['tot']);
            
            
                $sql = "UPDATE reservering SET van=:van, tot=:tot
                WHERE reserverings_code=:reserverings_code";

                    $placeholders = [
                        'reserverings_code' => $reserverings_code,    
                        'van' => $van,
                        'tot' => $tot       
                    ];
                        $db->edit($sql,$placeholders, "medewerker.php");
        }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">

<form method="POST">
        <input type="hidden" name="reserverings_code" value="<?php echo trim($_GET['reserverings_code']) ?>"> <br><br>
        Van : <input type="date" name="van"   required> <br><br>
        Tot : <input type="date" name="tot"  required> <br><br>

        <input type="submit" class="btn btn-primary" name="submit" value="Wijzig">
</form>
    </div>
    </div>
    </div>