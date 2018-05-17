<?php
include "config.php";

	$li = $_GET['li'];
	$usu = "SELECT usuario FROM tb_usuario WHERE id_usuario = '$li'";
	$nome = mysql_query($usu);
	$row = mysql_fetch_object($nome);
?>
<script>
	function box() 
	{
	var x;
	var nome = '"'+"<?php echo $row->usuario; ?>"+'"';
	var l = "<?php echo $li ?>";
	var r=confirm("Deseja mesmo excluir o usuario "+nome+"?");
	if (r==true) 
	{
	x="a";alert('O usuario '+nome+' foi excluido!'); window.location = "excluir2.php?li="+l;
  	}
	else
  	{
 	x="b"; window.location = "index.php";
 	}
	}
</script>
<script>
box();
</script>
