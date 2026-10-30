<?php

require_once 'MahasiswaController.php';

$controller = new MahasiswaController();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($action === 'detail' && isset($_GET['id'])) {
    $controller->detail($_GET['id']);
} else {
    $controller->index();
}