<?php
$row=$Item->find($_GET['id']);

?>

<h2 class="ct"><?=$row['name'];?></h2>

<div class="item">
    <div class="pp">
        <a href="?do=detail&id=<?=$row['id'];?>">
            <img src="./img/<?=$row['img'];?>" alt="" style="width:200px;height:160px;">
        </a>
    </div>
    <div>
        <div class="pp">分類：<?=$row['name'];?></div>
        <div class="pp">編號：<?=$row['no'];?></div>
        <div class="pp">價格：<?=$row['price'];?></div>
        <div class="pp">詳細說明：<?=nl2br($row['intro']);?>...</div>
        <div class="pp">庫存量：<?=$row['stock'];?></div>
    </div>
</div>

<div class="tt ct" style="width:85%;margin:auto;">
    <input type="number" name="qt" id="qt" value="1">
    <img src="./icon/0402.jpg" alt="" onclick="buy()">
</div>

<script>
function buy() {
    let qt = $("#qt").val()
    location.href = `?do=buycart&id=<?=$_GET['id'];?>&qt=${qt}`
}
</script>