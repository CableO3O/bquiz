<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">進佔總人數管理</p>
    <form method="post" action="./api/edit_total.php">
        <table style="width:50%;margin:auto">
            <tbody>
                <tr class="yel" style="width: 50%;">
                    <td width="50%">進佔總人數:</td>
                    <td width="50%"><input type="number" name="total" value="<?=$Total->find(1)['total'];?>"></td>
                </tr>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>