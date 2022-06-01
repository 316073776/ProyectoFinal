<ul class="nav">
			<li tabindex="0" class="active"><i class="bi bi-house-fill"></i><a href="../catalogo_discos.php">Inicio</a></li>
			<li tabindex="0"><i class="bi bi-people-fill"></i><a href="../creditos.php">Créditos</a></li>
			<?php if(isset($_SESSION) && isset($_SESSION['usuario'])): ?>
				<li tabindex="0"><a href="../catalogo_artistas.php">Artistas</a></li>
				<li tabindex="0"><a href="../catalogo_compositores.php">Compositores</a></li>
				<li tabindex="0"><a href="../catalogo_discos.php">Discos</a></li>
				<li tabindex="0"></i><a href="../catalogo_disqueras.php">Disqueras</a></li>
				<li tabindex="0"><a href="../catalogo_grupos.php">Grupos</a></li>
				<li tabindex="0"><a href="../catalogo_productores.php">Productores</a></li>
				<li tabindex="0"><a href="../logout.php">Cerrar sesión</a></li>
			<?php endif; ?>
</ul>