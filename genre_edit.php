<?php
include_once "header.php";
include_once "db.php";

$id =(int) $_GET['id'];

$query = "SELECT * FROM genres WHERE id= ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$id]);
//Iz baze preberemo vse o žanru, ki ga urejamo
$genre = $stmt->fetch();

?>

<h2>Uredi žanr</h2>

<form action="genre_update.php" method="post">
    <input type="hidden" name="id" values="";
    <input type="text" <?php echo $genre['title']; ?> name="title" placeholder="Vnesi ime žanra" class="form-control" required="required" /><br />
    <input type="text" <?php echo $genre['short']; ?> name="short" placeholder="Vnesi kratico žanra" class="form-control" /><br />
    <input type="submit" value="Shrani" class= "btn btn-primary" />
</form>
<?php
include_once "footer.php";
?>