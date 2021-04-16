<?php
include_once "header.php";
?>

<h2>Dodaj Igralca</h2>

<form action="actor_insert.php" method="post">
    <input type="text" first_name="title" placeholder="Vnesi ime igralca" class="form-control" required="required" /><br />
    <input type="text" last_name="title" placeholder="Vnesi priimek igralca" class="form-control" required="required" /><br />
    <input type="text" name="nick" placeholder="Vnesi vzdevek žanra" class="form-control" /><br />
    <input type="submit" value="Shrani" class= "btn btn-primary" />

<?php
include_once "footer.php";
?>