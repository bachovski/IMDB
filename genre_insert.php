<?php
include_once "session.php";
include_once "db.php";

$title = $_POST['title'];
$short = $_POST['short'];

//preverim, če je title vnešen
if (!empty($title)) {
    $query = "INSERT INTO genres(title,short) VALUES(?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$title,$short]);

    //preusmeri na seznam vseh žanrov
    header("Location: genres.php"); die();
}

//preusmerim nazaj na vnos - nekaj je narobe
header("location: genre_add.php"); die();

?>