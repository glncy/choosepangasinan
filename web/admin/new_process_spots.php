<?php

$target_dir = "../images/carousel/";
$target_file = $target_dir . basename($_FILES["pic1"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check file size
if ($_FILES["pic1"]["size"] > 500000) {
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
    $path=$_FILES["pic1"]["name"];
    $pic1=basename($path);
    if (move_uploaded_file($_FILES["pic1"]["tmp_name"], $target_file))
    {
        echo "<script>alert('The photos has been uploaded')</script>";
    }
    else
    {
        echo "<script>alert('There was an error uploading the file.')</script>";
    }
}

$target_dir = "../images/carousel/";
$target_file = $target_dir . basename($_FILES["pic2"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check file size
if ($_FILES["pic2"]["size"] > 500000) {
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
    $path=$_FILES["pic2"]["name"];
    $pic2=basename($path);
    if (move_uploaded_file($_FILES["pic2"]["tmp_name"], $target_file))
    {
        echo "<script>alert('The photos has been uploaded')</script>";
    }
    else
    {
        echo "<script>alert('There was an error uploading the file.')</script>";
    }
}

$target_dir = "../images/carousel/";
$target_file = $target_dir . basename($_FILES["pic3"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check file size
if ($_FILES["pic3"]["size"] > 500000) {
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
    $path=$_FILES["pic3"]["name"];
    $pic3=basename($path);
    if (move_uploaded_file($_FILES["pic3"]["tmp_name"], $target_file))
    {
        echo "<script>alert('The photos has been uploaded')</script>";
    }
    else
    {
        echo "<script>alert('There was an error uploading the file.')</script>";
    }
}



$spot=$_POST['new_spot'];
$des=$_POST['new_des'];
$place=$_POST['select'];
$type=$_POST['type'];
include($_SERVER["DOCUMENT_ROOT"]."/connect_server.php");

$query="INSERT INTO spots(name,des,place,type) VALUES ('$spot','$des','$place','$type')";
mysql_query($query);
$query="INSERT INTO gallery(name,filename1,filename2,filename3) VALUES ('$spot','$pic1','$pic2','$pic3')";
mysql_query($query);
mysql_close();

header('Location: spots.php');
?>