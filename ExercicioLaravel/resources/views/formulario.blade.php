<form action="" method="POST">
	{{ csrf_field() }}
	<label>Usuario: </label>
	<input type="text" name="usuario"><br>
	<label>Senha: </label>
	<input type="password" name="senha"><br>
	<input type="submit" name="btn" value="Enviar">
</form>
