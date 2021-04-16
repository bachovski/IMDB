<?php
include_once "session.php";
include_once "header.php";
?>

<h3>Prijava</h3>

<form action="login_heck.php" method="post">
    <input type="email" class= "form-control" name="email" placeholder="Vnesi e-pošto" required="required" /><br />
    <input type="password" class= "form-control" name="pass" placeholder="Vnesi geslo" required="required" /><br />
    <input type="submit" class= "btn btn-primary" value="Prijava" />
    </forms>

<?php
include_once "footer.php";
?>