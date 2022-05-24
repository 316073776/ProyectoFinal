<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario Alta Grupos</title>
		<script src="js/jquery-3.6.0.js"></script>
		<script src="js/ajaxformproductores.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
	</head>
	<body>
		<h1>Formulario para registro de grupos</h1>
		<form id="formulario">
			<label for="nombre">Nombre: </label>
			<input type="text" name="nombre" id="nombre">
			<br/>
			<label for="pais_origen">Pais de origen: </label>
			<input type="text" name="pais_origen" id="pais_origen">
			<br/>

			<button type="submit" id="enviar">Confirmar</button>
		</form>
	</body>
</html>
