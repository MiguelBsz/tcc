<!DOCTYPE html>
<html>
<head>
	<title>Agenda de Compromissos</title>
</head>
<body>
	<h1>Agenda de Compromissos</h1>
	<form method="post" action="adicionar_compromisso.php">
		<label for="data">Data:</label>
		<input type="date" name="data" required><br><br>
		<label for="hora">Hora:</label>
		<input type="time" name="hora" required><br><br>
		<label for="descricao">Descrição:</label>
		<textarea name="descricao" required></textarea><br><br>
		<input type="submit" value="Adicionar Compromisso">
	</form>
</body>
</html>