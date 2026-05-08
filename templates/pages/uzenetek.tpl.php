<?php
session_start();

if (!isset($_SESSION['login'])) {
    echo "<h2>Hozzáférés megtagadva</h2>";
    echo "<p>Az üzenetek megtekintéséhez be kell jelentkezni!</p>";
    exit;
}
?>



<h2>Beérkezett üzenetek</h2>

<table border="1">
    <tr>
        <th>Név</th>
        <th>Email</th>
        <th>Üzenet</th>
        <th>Időpont</th>
    </tr>
</table>