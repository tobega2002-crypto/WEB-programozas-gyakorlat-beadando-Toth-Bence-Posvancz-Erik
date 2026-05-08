<?php
session_start();

if (!isset($_SESSION['login'])) {
    echo "<h2>Hozzáférés megtagadva</h2>";
    echo "<p>Az üzenetek megtekintéséhez be kell jelentkezni!</p>";
    exit;
}
?>