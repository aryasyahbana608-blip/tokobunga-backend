<?php

function redirect($url) {
    header("Location: $url");
    exit;
}

function esc($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

?>
