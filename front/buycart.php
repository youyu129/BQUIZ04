<?php

// 考試可以省略
// 沒有購物 直接按上方購物車 會出現錯誤 沒有['cart']
if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=[];
}

if(!empty($_GET['id'])){
    $_SESSION['cart'][$_GET['id']]=$_GET['qt'];
}

// dd($_SESSION['cart']);

if(!isset($_SESSION['Mem'])){
    to("index.php?do=login");
}

// echo $_GET['id'];
// echo "<br>";
// echo $_GET['qt'];

?>

<h2 class="ct"><?=$_SESSION['Mem'];?>的購物車</h2>

<table class="all">
    <tr class="tt ct">
        <td>編號</td>
        <td>商品名稱</td>
        <td>數量</td>
        <td>庫存量</td>
        <td>單價</td>
        <td>小計</td>
        <td>刪除</td>
    </tr>
    <?php
    foreach($_SESSION['cart'] as $id =>$qt):
        $item=$Item->find($id);
    ?>
    <tr class="pp">
        <td class="ct"><?=$item['no'];?></td>
        <td><?=$item['name'];?></td>
        <td class="ct"><?=$qt;?></td>
        <td class="ct"><?=$item['stock'];?></td>
        <td class="ct"><?=$item['price'];?></td>
        <td class="ct">
            <?php
            echo $item['price']*$qt;
            ?>
        </td>
        <td class="ct">
            <img src="./icon/0415.jpg" alt="">
        </td>
    </tr>
    <?php
    endforeach;
    ?>
</table>