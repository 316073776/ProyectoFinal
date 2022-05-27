<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario Alta Discos</title>
		<script src="js/jquery-3.6.0.js"></script>
		<script src="js/ajaxformdiscos.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script><link href="css/styles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>

      <ul class="nav">
        <li tabindex="0" class="active"><i class="bi bi-house-fill"></i> Inicio </li>
        <li tabindex="0"><i class="bi bi-people-fill"></i>Créditos</li>
        <li tabindex="0"><i class="bi bi-door-open-fill"></i>Cerrar sesión</li>
      </ul>
		<h1>Formulario para registro de discos</h1>
		<form id="formulario">
			<label for="titulo">Titulo: </label>
			<input type="text" name="titulo" id="titulo">
			<br/>
			<label for="grupo_id">Grupo id: </label>
			<input type="number" name="grupo_id" id="grupo_id">
			<br/>
			<label for="año">Año: </label>
			<input type="date" name="año" id="año">
			<br/>
			<label for="genero">Genero: </label>
			<input type="text" name="genero" id="genero">
			<br/>
			<label for="disquera_id">Disquera id: </label>
                        <input type="number" name="disquera_id" id="disquera_id">
                        <br/>
			<label for="productor_id">Productor id: </label>
                        <input type="number" name="productor_id" id="productor_id">
                        <br/>
			<label for="costo">Costo: </label>
                        <input type="number" name="costo" id="costo">
                        <br/>

			<button type="submit" id="enviar">Confirmar</button>
		</form>
	</body>
</html>
