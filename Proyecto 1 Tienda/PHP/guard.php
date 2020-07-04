<?php

require_once _DIR_ .'/../PHP/sessions.php';

if (!isset($_SESSION['id_user']) || empty($_SESSION['id_user'])) {
    return header('Location: /');
}