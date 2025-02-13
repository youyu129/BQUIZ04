<?php
include_once "db.php";

// 得到的資料
// $acc
// $pw
// $pr 要將陣列轉為字串

$_POST['pr']=serialize($_POST['pr']);
$Admin->save($_POST);

to("../back.php?do=admin");
?>