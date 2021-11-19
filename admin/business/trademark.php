<?php
    
    function trademark_index(){
        admin_render('trademark/index.php',loadAll_shoes_brand());
    }
    function trademark_delele(){
        if(isset($_GET['delete-trademark'])&&($_GET['delete-trademark']>0)){
            delete_shoe_brand($_GET['delete-trademark']);
        }
    }
    function trademark_add(){
        $done="";
        if(isset($_POST['add'])&&isset($_POST['name'])){
            insert_shoe_brand($_POST['name']);
            $done="DONE";
        }
        admin_add('trademark/add.php',$done);
    }
    function trademark_update(){
        $done="";
        if(isset($_POST['update'])&&isset($_POST['name'])){
            update_shoe_brand($_GET['update-trademark'],$_POST['name']);
            $done="DONE";
        }
        admin_update('trademark/update.php',$done);
    }
?>