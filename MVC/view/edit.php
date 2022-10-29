<h1>Sửa danh mục</h1>
<form action="?action=update" method="POST">

  <input type="hidden" name="id" value="<?php echo $each['id'] ?>">

  Tên Danh mục:
  <input type="text" name="name" value="<?php echo $each['name'] ?>">

  <br>
  <button>Sửa</button>

</form>