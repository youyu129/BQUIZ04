<?php

date_default_timezone_set("Asia/Taipei");
session_start();

class DB{
protected $dsn="mysql:host=localhost;charset=utf8;dbname=db18";
protected $pdo;
protected $table;

function __construct($table){
    $this->table=$table;
    $this->pdo=new PDO($this->dsn,'root','');
}

// 裡面的function
// all
// find
// save
// del
// count
// math
// arrayToSql
// fetch_one
// fetch_all

// all
// table後面記得要加空白
// 如果第一個參數有資料 而且他是陣列 if 
// 如果第一個參數不是空的 但他不是陣列(他是字串) else 把他串在一起
// 如果第一個參數是空的 不管他
// 如果第二個參數有資料就直接跑
// 撈全部資料
function all(...$arg){
    $sql="select * from $this->table ";
    // 如果有參數
    if(!empty($arg[0]))
    // 得到這個陣列 當成where條件裡面的資料
    $tmp=
    }
    // 如果1是有東西的話 我就當成字串接在後面

}

// find
// 判斷是數字id 或 陣列
// 如果他是陣列 把他拚起來
// 如果他不是陣列 他給的是id值(我們自己定義的) 就寫sql定義id
// find只要一筆資料
function all($array){

}


// save
// 把陣列的key值包起來變成一個陣列
// 用`,``,``,`把欄位名稱串起來
// 用','把欄位的內容串起來
// 把key跟value放進去
// 如果成功會回傳1以上 如果失敗會傳0

// del
// count
function count(...$array){
// 計算的動作
// 回傳他的值
return $this->pdo->query($sql)->fecthColumn();
}

// math
// arrayToSql
function arrayToSql($array){
    $tmp=[];
    foreach
}

// fetch_one
function fetch_one($sql){
    return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}
// fetch_all
function fetch_all(){

}


}

// 外面的function
// q
// to
// dd

// q
function q($sql){
    $dsn="mysql:host=localhost;charset=utf8;dbname=db18";
    $pdo=new PDO($dsn,'root','')
}


// to
function to($url){
    header("location:".$url);
}

// dd
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
?>