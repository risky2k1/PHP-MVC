<?php
$connect = mysqli_connect('localhost', 'root', '', 'webshop');
mysqli_set_charset($connect, 'utf8');


switch ($action) {
  case '':
    $sql = "select * from categories";
    $result = mysqli_query($connect, $sql);
    break;
  case 'store':
    $sql = "insert into categories (name,slug) values ('$name','$slug') ";
    mysqli_query($connect, $sql);
    break;
  case 'edit':

    $sql = "select * from categories where id = '$id'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    break;
  case 'update':
    $sql = "update categories set name = '$name' where id='$id'";
    mysqli_query($connect, $sql);
    break;
  case 'delete':
    $sql = "delete from categories where id='$id'";
    mysqli_query($connect, $sql);
    break;
}
