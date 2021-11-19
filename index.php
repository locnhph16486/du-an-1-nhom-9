<?php
    // include "view/header.php";
    session_start();
    $url = isset($_GET['url']) ? $_GET['url'] : "/";
    require_once './model/pdo.php';
    require_once './commons/utils.php';
    require_once './model/trademark.php';
    require_once './model/shoes.php';
    switch ($url) {
        case 'cp-admin':
            require_once './admin/business/dashboard.php';
            dashboard_index();
            break;
        case 'trademark':
            require_once './admin/business/trademark.php';
            trademark_index();
            trademark_delele();
            break;
        case 'trademark-add':
            require_once './admin/business/trademark.php';
            trademark_add();
            break;
        case 'trademark-update':
            require_once './admin/business/trademark.php';
            trademark_update();
            break;
        case 'shoes':
            require_once './admin/business/shoes.php';
            shoes_index();
            shoes_delele();
            break;
        case 'shoes-add':
            require_once './admin/business/shoes.php';
            shoes_add();
            break;
        default:
            # code...
            break;
    }
    // include "view/footer.php";
?>