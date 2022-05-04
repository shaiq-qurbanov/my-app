<?php
include "connect.php";


$tip_darogi = $_POST["tip_darogi"];
$kod = $_POST["kod"];
// $znak= $_FILES["file"]["name"];
$maks_kol_vo_polos = $_POST["maks_kol_vo_polos"];
$maks_skorost= $_POST["maks_skorost"];
$skarostnoy_porog = $_POST["skarostnoy_porog"];
$kol_vo_datchikov = $_POST["kol_vo_datchikov"];
$kol_vo_drpog = $_POST["kol_vo_drpog"];
$proekt = $_POST["project"];
$id = $_POST["id"]; 

echo $id;

$sql ="UPDATE spisok_doroq SET  tip_darogi='$tip_darogi', kod='$kod',
 maks_kol_vo_polos='$maks_kol_vo_polos',maks_skorost='$maks_skorost' ,
  skarostnoy_porog='$skarostnoy_porog' ,kol_vo_datchikov='$kol_vo_datchikov',
  kol_vo_drpog='$kol_vo_drpog', proekt='$proekt' WHERE id=$id";
  echo $kol_vo_drpog;
  echo $id;

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
  }
  $conn->query($sql);
