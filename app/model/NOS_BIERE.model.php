<?php


function GetdonneesBiere(int $references, PDO $db) {
    $sql = "SELECT * FROM bière";
    $result =$db->query($sql);
}