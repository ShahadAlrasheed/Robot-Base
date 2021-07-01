<?php

$host='localhost';
$user='root';
$pass='';
$db='robot-map';

$conn=mysqli_connect($host,$user,$pass,$db);#اتصال قاعده البيانات 

if(isset($_POST['forward'])){
    $insert="insert into map values('','forward')";
    $q=mysqli_query($conn,$insert);
    echo"forward";
    }else {
    echo mysqli_error($conn);
}
if(isset($_POST['stop'])){
    $insert="insert into map values('','stop')";
    $q=mysqli_query($conn,$insert);
    echo"stop";
}else {
    echo mysqli_error($conn);
}
if(isset($_POST['right'])){
    $insert="insert into map values('','right')";
    $q=mysqli_query($conn,$insert);
    echo"right";
}else {
    echo mysqli_error($conn);
}
if(isset($_POST['backward'])){
    $insert="insert into map values('','backward')";
    $q=mysqli_query($conn,$insert);
    echo"backward";
}else {
    echo mysqli_error($conn);
}
if(isset($_POST['left'])){
    $insert="insert into map values('','left')";
    $q=mysqli_query($conn,$insert);
    echo"left";
}else {
    echo mysqli_error($conn);
}
  
  
  ?>

    