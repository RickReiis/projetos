<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="interface">
		<div id="form">
			<form method="post" action="inserir.php" class="form">
				<p>
				<label for="nome">nome</label><br>
				<input type="text" name="nome" id="nome">
				</p>
				<p>
				<label for="email">email</label><br>
				<input type="email" name="email" id="email">
				</p>
				<p>
				<label for="usuario">usuario</label><br>
				<input type="text" name="usuario" id="usuario">
				</p>
				<p>
				<label for="senha">senha</label><br>
				<input type="password" name="senha" id="senha">
				</p>
				<p class="submit">
				<input type="submit" name="ENVIAR">
				</p>
			</form>
		</div>
		<table cellpadding="5" cellspacing="0" border="1" class="table">
			<tr>
				<th>ID</th>
				<th>NOME</th>
				<th>EMAIL</th>
				<th>USUÁRIO</th>
				<th>SENHA</th>
				<th><a href="atualizar.php">ATUALIZAR ID</a></th>
			</tr>
			<tr>
			<?php
				$sql = "SELECT * FROM tb_usuario";
				$consulta = mysql_query($sql);
				if (mysql_num_rows($consulta)>0)
					{
						while($row = mysql_fetch_object($consulta))
						{
							?>
							<td><?php echo $row->id_usuario; ?></td>
							<td><?php echo $row->nome; ?></td>
							<td><?php echo $row->email; ?></td>
							<td><?php echo $row->usuario; ?></td>
							<td><?php echo $row->senha; ?></td>
							<td>
								<a href="editar.php?li=<?php echo $row->id_usuario; ?>">EDITAR</a>
								<a href="excluir.php?li=<?php echo $row->id_usuario; ?>">EXCLUIR</a>
							</td>
						</tr>
					<?php
						}
					}
					?>			
		</table>
	</div>
</body>
</html>