<?php include_once "../api/db.php";?>
<h3>編輯次選單</h3>
<hr>
<form action="./api/submenu.php" method="post">
    <table>
        <tr>
            <td>次選單名稱</td>
            <td>次選單連結網址</td>
            <td>刪除</td>
        </tr>
        <?php
$subs=$Menu->all(['menu_id'=>$_GET['id']])
        ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</form>