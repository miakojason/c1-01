<?php
//透過網址參數table來決定要顯示的文字
switch($_GET['table']){
    case "title":
        echo "<h3>更新網站標題圖片</h3>";
    break;
    case 'mvim':
        echo "<h3>更換動畫圖片</h3>";
    break;
    case 'image':
        echo "<h3>更新校園映像圖片</h3>";
    break;
}
?>
<hr>
<!--所有的更新功能表單都會送到api中的upload.php這支程式中去處理-->
<form action="./api/upload.php" method='post' enctype="multipart/form-data">
    <table style="width:70%;margin:auto">
        <tr>
        <?php 
            switch($_GET['table']){
                case "title":
                    echo "<td>標題區圖片</td>";
                break;
                case 'mvim':
                    echo "<td>動畫圖片</td>";
                break;
                case 'image':
                    echo "<td>校園映像圖片</td>";
                break;
            }
        ?>
            <td><input type="file" name="img" ></td>
        </tr>
    </table>
<div class="cent">
        <!--建立一個隱藏欄位來放置資料表名稱-->
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <!--建立一個隱藏欄位來放資料id，資料id會以網址參數get的方式來傳送-->
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <input type="submit" value="更新">
    <input type="reset" value="重置">
</div>    
</form>