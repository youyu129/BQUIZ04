<div class="ct">
    <button type="button">新增管理員</button>
</div>

<table class="all">
    <tr class="tt ct">
        <td>帳號</td>
        <td>密碼</td>
        <td>管理</td>
    </tr>
    <?php
    $rows=$Admin->all();
    foreach($rows as $row):
    ?>

    <tr class="pp ct">
        <td><?=$row['acc'];?></td>
        <td><?=str_repeat('*',strlen($row['pw']));?></td>
        <td></td>
    </tr>
    <?php
    endforeach;
    ?>
</table>