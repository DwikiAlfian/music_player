<?php

include_once('../koneksi.php');
$database = new database();

// FILENAME TAKE AND MOVE
$filename_x = $_FILES['music']['name'];
$filename = str_replace(" ","_",$filename_x);
$filetmp = $_FILES['music']['tmp_name'];

$dir = "../../../htdocs/music/";

// PHOTO
$photoname_x = $_FILES['photo']['name'];
$photoname = str_replace(" ","_",$photoname_x);
$phototmp = $_FILES['photo']['tmp_name'];

$dir2 = "../../../htdocs/music/photo/";

$uploaded = move_uploaded_file($filetmp, $dir.$filename);
$uploaded2 = move_uploaded_file($phototmp, $dir2.$photoname);

$action = $_GET['action'];

// VERIFY IMAGE
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
    $uploadOk = 0;
}

if($action == "add")
{
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    
    } else {
        move_uploaded_file($phototmp, $dir2.$photoname);
    }
    
    $database->musicuploads($filename,$photoname,$_POST['title'],$_POST['uploader']);
    header('location:../index.php');
}
