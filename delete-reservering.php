<?php
include "database.php";
    $db = new database();

if (isset($_GET['reserverings_code'])) {

    $reserverings_code = $_GET['reserverings_code'];
        $sql = "DELETE FROM reservering WHERE reserverings_code=:reserverings_code";
            $placeholder = [
                'reserverings_code'=> $reserverings_code
            ];
                $db->delete($sql, $placeholder, "medewerker.php");
}
?>