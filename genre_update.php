<?php
include_once "session.php";
include_once "db.php";

$title = $_POST['title'];
$short = $_POST['short'];
$id = (int) $_POST['id'];

//preverim, če je title vnešen
if ((!empty($title))&&!empty($id))) {
    $query = "UPDATE genres SET title?,short=? WHERE id=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$title,$short]);

    //preusmeri na seznam vseh žanrov
    header("Location: genres.php"); die();
}

//preusmerim nazaj na urejanje - nekaj je narobe
header("location: genre_edit.php?id=$id"); die();
?>