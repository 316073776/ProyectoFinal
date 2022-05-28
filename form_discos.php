<?php require_once 'templates/header.php'; ?>  
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
		<?php require_once 'templates/footer.php'; ?>
