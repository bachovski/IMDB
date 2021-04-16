<?php
include_once "session.php";
include_once "db.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$nick = $_POST['nick'];

//preverim, če sta vnešena ime in priimek
if ((!empty($first_name))&&(!empty($last_name))) {
    $query = "INSERT INTO actors(first_name,last_name,nick) VALUES(?,?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$first_name,$last_name,$nick]);

    //preusmeri na seznam vseh igralcev
    header("Location: actors.php"); die();
}

//preusmerim nazaj na vnos - nekaj je narobe
header("location: actor_add.php"); die();

?>