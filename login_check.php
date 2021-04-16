<?php
include_once "session.php";
include_once "db.php";

$email = $_POST['email'];
$pass = $_POST['pass'];

//preverim ali so podatki polni
if(!empty($email) && !empty($pass)) {
    $query = "SELECT * FROM users WHERE email=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);
    //ali users to e-pošto obstaja
    if($stmt->rowCount()== 1) {
        $user - $stmt->fetch(); //v spremenljivko user shranim podatke iz baze
        //preverim ali se gesli ujemata
        if(password_verify($pass,$user['pass'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            $_SESSION['admin'] = $user['admin'];

            header("Location: index.php"); die();
        }
    }
}
//nazaj na registracijo
header("Location login.php"); die(); 
?>