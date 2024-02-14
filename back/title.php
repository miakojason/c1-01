<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">網站標題管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tr class="yel">
                <td width="45%">網站標題</td>
                <td width="23%">替代文字</td>
                <td width="7%">顯示</td>
                <td width="7%">刪除</td>
                <td></td>
            </tr>
            <?php
            $rows = $DB->all();
            foreach ($rows as $row) {
            ?>
                <tr>
                    <td width="45%"><img src="./img/<?= $row['img']; ?>" style="width:300px;height:30px"></td>
                    <td width="23%">
                        <input type="text" name="text[]" value="<?= $row['text']; ?>">
                    </td>
                    <td width="7%"><input type="radio" name="sh" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>></td>
                    <td width="7%"><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
                    <td>
                        <input type="button" value="更新圖片" onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $do; ?>&id=<?= $row['id'];?>')"><input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tr>
                <td width="200px">
                    <input type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增網站標題圖片">
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