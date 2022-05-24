<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario Alta Discos</title>
		<script src="js/jquery-3.6.0.js"></script>
		<script src="js/ajaxformdiscos.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
	</head>
	<body>
		<h1>Formulario para registro de discos</h1>
		<form id="formulario">
			<label for="titulo">Titulo: </label>
			<input type="text" name="titulo" id="titulo">
			<br/>
			<label for="grupo_id">Grupo: </label>
			<input type="text" name="grupo_id" id="grupo_id">
			<br/>
			<label for="año">Año: </label>
			<input type="date" name="año" id="año">
			<br/>
			<label for="genero">Genero: </label>
			<input type="text" name="genero" id="genero">
			<br/>
			<label for="disquera_id">Disquera: </label>
                        <input type="text" name="disquera_id" id="disquera_id">
                        <br/>
			<label for="productor_id">Productor: </label>
                        <input type="text" name="productor_id" id="productor_id">
                        <br/>
			<label for="costo">Costo: </label>
                        <input type="float" name="costo" id="costo">
                        <br/>

			<button type="submit" id="enviar">Confirmar</button>
		</form>
	</body>
</html>
