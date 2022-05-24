<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario Disqueras</title>
		<script src="js/jquery-3.6.0.js"></script>
		<script src="js/ajaxformdisqueras.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
	</head>
	<body>
		<h1>Formulario para registro de disqueras</h1>
		<form id="formulario">
			<label for="nombre">Nombre: </label>
			<input type="text" name="nombre" id="nombre">
			<br/>
			<label for="pais">Pais: </label>
			<input type="text" name="pais" id="pais">
			<br/>

			<button type="submit" id="enviar">Confirmar</button>
		</form>
	</body>
</html>
