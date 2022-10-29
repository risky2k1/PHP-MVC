<h1>Danh mục</h1>
<a href="?action=create">Thêm danh mục</a>
<table border="1px" width='100%'>
  <tr>
    <th width='30%'>Mã</th>
    <th width='60%'>Tên Danh Mục</th>
    <th width='10%'>Thao tác</th>


    <?php foreach ($result as $each) { ?>
  <tr>
    <td style="text-align:center"><?php echo $each['id'] ?>
    </td>
    <td style="text-align:center"><?php echo $each['name'] ?></td>
    <td style="text-align:center">
      <a href="?action=edit&id=<?php echo $each['id'] ?>">Sửa</a> ||
      <a href="?action=delete&id=<?php echo $each['id'] ?>">Xóa</a>
    </td>
  </tr>
<?php } ?>
</tr>
</table>