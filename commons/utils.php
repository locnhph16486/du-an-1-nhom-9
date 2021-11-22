<?php

const BASE_URL = "http://localhost/du-an-1-nhom-9/";
const ADMIN_ASSET = BASE_URL . 'public/admin-assets/';


function dd(){
    $data = func_get_args();
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}

function client_render($view, $data = []){
    extract($data);
    $view = './client/views/' . $view;
    include_once "./client/views/layouts/main.php";
}

function admin_render($view, $data = []){
    extract($data);
    $list_trademark=loadAll_shoes_brand();
    $list_shoes=loadAll_shoes();
    $view = './admin/views/' . $view;
    if(isset($_GET['delete-trademark'])&&($_GET['delete-trademark']>0)){
        header("refresh:0,url=trademark");
    }
    if(isset($_GET['delete-shoes'])&&($_GET['delete-shoes']>0)){
        header("refresh:0,url=shoes");
    }
    include_once "./admin/views/layouts/main.php";
}
function admin_add($view,$done,$doneFile=null,$data = []){
    extract($data);
    $list_trademark=loadAll_shoes_brand();
    $view = './admin/views/' . $view;
    include_once "./admin/views/layouts/main.php";
}
function admin_update($view,$done,$doneFile=null){
    $list_trademark=loadAll_shoes_brand();
    $view = './admin/views/' . $view;
    include_once "./admin/views/layouts/main.php";
}
?>