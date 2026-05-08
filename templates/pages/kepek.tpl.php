<h2>Képgaléria</h2>

<?php


$sql = "SELECT * FROM kepek ORDER BY feltoltes_datuma DESC";
$result = $dbh->query($sql);

echo '<div class="galeria">';

while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo '<img src="images/upload/'.$row['fajlnev'].'" width="200">';
}

echo '</div>';
?>

<?php if(isset($_SESSION['login'])) { ?>

<h3>Kép feltöltése</h3>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="kep" required>
    <button type="submit" name="feltolt">Feltöltés</button>
</form>

<?php } else { ?>
<p>Csak bejelentkezve tölthetsz fel képet.</p>
<?php } ?>