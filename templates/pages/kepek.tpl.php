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