<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">管理者帳號管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tr class="yel">
                <td width="40%">帳號</td>
                <td width="40%">密碼</td>
                <td width="10%">刪除</td>
            </tr>
            <?php
            $rows = $DB->all();
            foreach ($rows as $row) {
            ?>
                <tr>
                    <td width="40%">
                        <input type="text" name="acc[]" value="<?= $row['acc']; ?>">
                    </td>
                    <td width="40%">
                        <input type="password" name="pw[]" value="<?= $row['pw']; ?>">
                    </td>
                    <td width="10%"><input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                    <input type="hidden" name="id[]"value="<?=$row['id'];?>">
                </td>
                </tr>
            <?php
            }
            ?>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tr>
                <td width="200px">
                    <input type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增管理者帳號">
                </td>
                <td class="cent">
                    <input type="hidden" name="table" value="<?= $do; ?>">
                    <input type="submit" value="修改確定">
                    <input type="reset" value="重置">
                </td>
            </tr>
        </table>
    </form>
</div>