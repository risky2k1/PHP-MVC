<?php

$action = '';


//Nếu đã có action thì gán vào biến $action
if (isset($_GET['action'])) {
  $action = $_GET['action'];
}


switch ($action) {


  case '':
    require('modal.php');
    require('view/listCategory.php');
    break;

  case 'create':
    require('view/create.php');
    break;

  case 'store':
    $slug = $_POST['slug'];
    $name = $_POST['name'];
    require('modal.php');
    header('location:index.php');
    break;

  case 'edit':
    $id = $_GET['id'];
    require "modal.php";
    require "view/edit.php";
    break;

  case 'update':
    $id = $_POST['id'];
    $name = $_POST['name'];
    require "modal.php";
    header('location:index.php');
    break;

  case 'delete':
    $id = $_GET['id'];
    require "modal.php";
    header('location:index.php');
    break;

  default:
    echo "Action không tồn tại!";
}
