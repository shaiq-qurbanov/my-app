<?php
include "connect.php";

$sql="SELECT*FROM spisok_doroq ORDER BY id DESC LIMIT 5";
$result=$conn->query($sql);
