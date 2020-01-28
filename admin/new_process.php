<?php

$target_dir = "../images/places_covers/";
$target_file = $target_dir . basename($_FILES["add_cover"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check file size
if ($_FILES["add_cover"]["size"] > 500000) {
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadOk = 0;
}

if($uploadOk=0)
{
	echo "<script>alert('There was an Error in Uploading File. Maybe filename is existing or not a valid file');</script>";
}
// if everything is ok, try to upload file
 else {
    $path=$_FILES["add_cover"]["name"];
    $name_file_cover=basename($path);
    if (move_uploaded_file($_FILES["add_cover"]["tmp_name"], $target_file))
    {
        echo "<script>alert('The photos has been uploaded')</script>";
    }
    else
    {
        echo "<script>alert('There was an error uploading the file.')</script>";
    }
}

$target_dir = "../images/thumb/";
$target_file = $target_dir . basename($_FILES["add_thumb"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check file size
if ($_FILES["add_thumb"]["size"] > 500000) {
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadOk = 0;
}

if($uploadOk=0)
{
	echo "<script>alert('There was an Error in Uploading File. Maybe filename is existing or not a valid file');</script>";
}
// if everything is ok, try to upload file
else {
    $path=$_FILES["add_thumb"]["name"];
    $name_file_thumb=basename($path);
    if (move_uploaded_file($_FILES["add_thumb"]["tmp_name"], $target_file))
    {
        echo "<script>alert('The photos has been uploaded')</script>";
    }
    else
    {
        echo "<script>alert('There was an error uploading the file.')</script>";
    }
}


$place=$_POST['new_place'];
$des=$_POST['new_des'];
$maps=$_POST['new_maps'];
$aw=$_POST['new_aw'];

include($_SERVER["DOCUMENT_ROOT"]."/localhost.php");

$query="INSERT INTO tblplaces(cover,placename,des,maps,aw) VALUES ('$name_file_cover','$place','$des','$maps','$aw')";
mysql_query($query);
$query="INSERT INTO places(placename,placethumb) VALUES ('$place','$name_file_thumb')";
mysql_query($query);
mysql_close();

header('Location: places.php');
?>