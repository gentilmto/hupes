<div>
  
<?php 
 require_once(public_path() ."/phpGrid_Lite/conf.php");

$dg = new C_DataGrid("SELECT * FROM ficha_notificacao", "permissao", "orders");
$dg->enable_edit("INLINE", "CRUD");
$dg->display();

?>
</div>