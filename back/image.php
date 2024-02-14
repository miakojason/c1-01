<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tr class="yel">
                <td width="80%">校園映像資料</td>
                <td width="7%">顯示</td>
                <td width="7%">刪除</td>
                <td></td>
            </tr>
            <?php
            $total=$DB->count();
            $dic=3;
            $pages=ceil($total/$div);
            $now=$_GET['p']??1;
            $start=($now-1)*$div;
            $rows = $DB->all(" limit $start,$div");
            foreach ($rows as $row) {
            ?>
                <tr>
                    <td width="80%">
                        <img src="./img/<?=$row['img'];?>" style="width:100px;height:68px">
                    </td>
                    <td width="7%"><input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>></td>
                    <td width="7%"><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
                    <td>
                        <input type="button" value="更新圖片" onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $do; ?>&id=<?= $row['id'];?>')"><input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
        <div class="cent">
            <?php
if($now>1){
    $prev=$now-1;
    echo "<a href='?do=$do&p=$prev'><</a>";
}
for(){

}
if()
            ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tr>
                <td width="200px">
                    <input type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增校園映像資料圖片">
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