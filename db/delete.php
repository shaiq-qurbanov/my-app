<?php
include "connect.php";
if($_REQUEST && $_REQUEST["id"]){
    $id = $_REQUEST["id"];
    $req_st = "DELETE FROM spisok_doroq WHERE id=$id";
    $req_st=$conn->query($req_st);
}