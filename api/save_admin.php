<?php
include_once "db.php";

// 得到的資料
// $acc
// $pw
// $pr 要將陣列轉為字串

// 若權限都是空的 就給一個空陣列的字串
// if(!empty($_POST['pr'])){
//     $_POST['pr']=serialize($_POST['pr']);
// }else{
//     $_POST['pr']=serialize([]);
// }
// $Admin->save($_POST);

$_POST['pr']=serialize($_POST['pr']);
$Admin->save($_POST);

to("../back.php?do=admin");
?>