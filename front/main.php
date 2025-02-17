<?php
$nav='';
$typeId=$_GET['type']??0;
if($typeId==0){
    $nav="全部商品";
}else{
    $type=$Type->find($typeId);
    if($type['big_id']==0){
        $nav=$type['name'];
    }else{
        $big=$Type->find($type['big_id']);
        $nav=$big['name'] ." > ". $type['name'];
    }
}
?>

<h2><?=$nav;?></h2>

<?php
$rows=$Item->all(['sh'=>1]);
if($typeId==0){
    $rows=$Item->all();
}else if($type['big_id']==0){
    $rows=$Item->all(['big'=>$typeId,'sh'=>1]);
}else{
    $rows=$Item->all(['mid'=>$typeId,'sh'=>1]);
}
?>
<?php
foreach($rows as $row):
?>
<div class="item">
    <div class="pp ct">
        <a href="?do=detail&id=<?=$row['id'];?>">
            <img src="./img/<?=$row['img'];?>" alt="" style="width:200px;height:160px;">
        </a>
    </div>
    <div>
        <div class="tt ct">
            <?=$row['name'];?>
        </div>
        <div class="pp">價錢：<?=$row['price'];?>
            <a href="?do=buycart&id=<?=$row['id'];?>&qt=1">
                <img src="./icon/0402.jpg" alt="" style="float:right;">
            </a>
        </div>
        <div class="pp">規格：<?=$row['spec'];?></div>
        <div class="pp" style="height:50px;">簡介：<?=mb_substr($row['intro'],0,20);?>...</div>
    </div>
</div>
<?php
endforeach;
?>