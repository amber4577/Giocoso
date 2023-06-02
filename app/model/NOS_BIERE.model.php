<?php

function GetdonneesBiere(int $references, PDO $db) {
    $sql = "SELECT * FROM bière";
    $img = "SELECT imgbieres FROM bière";
    $result =$db->query($sql);
}

