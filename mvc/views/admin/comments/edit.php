<h1>Editing Category</h1>
<?php
if (isset($_SESSION["email"]) && $_SESSION["role"] == "customer") {
  echo '<script type = "text/javascript">
  window.location.href = "http://localhost/web222/"</script>';
}
?>
<?php 
    require_once "../web222/mvc/views/admin/categories/form_category.php";
?>
<a href="http://localhost/web222/Category/index">Back</a>
