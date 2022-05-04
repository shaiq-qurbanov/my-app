<?php
include "connect.php";
include "file.php";
// // $sql = "CREATE DATABASE darogi";
// // $conn->query($sql);
// // if($conn->query($sql)===TRUE){
// //     echo "created successfulli";
// // }else{
// //     echo "no";
// // }
$stmt = "CREATE TABLE spisok_doroq(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tip_darogi VARCHAR(25) DEFAULT NULL,
    kod VARCHAR(25) DEFAULT NULL,
    znak VARCHAR(225) NULL,
    maks_kol_vo_polos INT DEFAULT 0,
    maks_skorost VARCHAR(25) DEFAULT NULL,
    skarostnoy_porog VARCHAR(25) DEFAULT NULL,
    kol_vo_datchikov VARCHAR(25) DEFAULT NULL,
    kol_vo_drpog VARCHAR(25) DEFAULT NULL,
    proekt VARCHAR(25) DEFAULT NULL)"; 
    
    if ($conn->query($stmt)===TRUE) {
    echo "yes";
}else {
    echo "no,".$conn->error;
}


$stmt = $conn->prepare("INSERT INTO spisok_doroq(tip_darogi, kod, znak, maks_kol_vo_polos,
 maks_skorost, skarostnoy_porog, kol_vo_datchikov, kol_vo_drpog,proekt) VALUES(?, ?, ?, ?, ?, ?, ?, ?,?)");
$stmt->bind_param("sssiiiiis",$tip_darogi, $kod, $znak, $maks_kol_vo_polos, $maks_skorost,$skarostnoy_porog,
 $kol_vo_datchikov, $kol_vo_drpog, $project);

$tip_darogi = $_POST["tip_darogi"];
$kod = $_POST["kod"];
$znak=$_FILES["file"]["name"];
$maks_kol_vo_polos = $_POST["maks_kol_vo_polos"];
$maks_skorost= $_POST["maks_skorost"];
$skarostnoy_porog = $_POST["skarostnoy_porog"];
$kol_vo_datchikov = $_POST["kol_vo_datchikov"];
$kol_vo_drpog = $_POST["kol_vo_drpog"];
$project = $_POST["project"];

$stmt->execute();
// echo $_FILES["file"]["name"];
// echo basename($_FILES["file"]["name"]);

 $sql = "ALTER TABLE spisok_doroq
ALTER maks_kol_vo_polos SET DEFAULT 0";
$conn->query($sql);
// if($conn->query($sql)){
//     echo "yes";
// }else {
//     echo "no";
// }