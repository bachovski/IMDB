<?php
include_once "header.php";
include_once "db.php";

$id =(int) $_GET['id'];

$query = "SELECT * FROM genres WHERE id= ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$id]);
//Iz baze preberemo vse o žanru, ki ga prikazujem
$genre = $stmt->fetch();

?>

<h1><?php echo$actor['first_name'].''.$actor['last_name']; ?></h1>
<h5><?php echo$actor['nick']; ?></h5>

<div id="slike"><?php 
    //preveri, če ima igralec slike
    $query ="SELECT * FROM actors_images WHERE actor_id=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);
    while ($row =$stmt->fetch()) {
        echo '<img src="'.$row['url'].'"width="150 alt="'.$row['title'].'" /> ';
    }
?>

</div>
<hr />
<form action="actor_image_upload.php" method="post" enctype="multipart/form-data">
    <.... prenesi skrito id actorja
    <input type="hidden" name="id" value="<?php echo $actor['id'];?>";
    <.... input da vpiše title slike
    <input type="text" name="title" placeholder="Vnesi naslov slike" class="form-control" /><br />
    <input type="file" /> <br />
    <---- input submit
    <input type="submit" name="submit" value="Shrani" class= "btn btn-primary" />


<?php
include_once "footer.php";
?>