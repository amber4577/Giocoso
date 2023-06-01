<?php

if (empty($_GET['num']) || !ctype_digit($_GET['num'])) {
    die("Ce numéro n'existe pas");
}

