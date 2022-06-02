<?php require_once 'templates/header.php'; ?>

<?php 
  if(!isUser()){

    header('Location: index.php');
  }

?>

  <body class="flex flex-col justify-center items-center">
    <?php
                include 'conexion.php';
                $query = "Select disco_id, titulo, grupo_id, año, genero, disquera_id, productor_id, costo from bdrecords.discos";
                $ejecucion = pg_query($con,$query);
    ?>
    <?php require_once 'templates/menu.php'; ?>
      <div class="container-forms flex flex-col p-5 mt-5 mb-2">
      <div class="brand-title">CATÁLOGO DE DISCOS</div>
      <div class="btn-add">
        <a class="mt-5" href="form_discos.php">AGREGAR DISCO</a>
      </div>
    </div>

    <div class="flex flex-col justify-center items-center mt-5 mb-5">
      <div class="overflow-hidden flex flex-col p-4">
          <table class="neumorphic">
            <thead>
              <tr>
		<th>ID</th>
                <th>Titulo</th>
		<th>Grupo</th>
		<th>Año</th>
		<th>Género</th>
		<th>Disquera</th>
		<th>Productor</th>
		<th>Costo</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
		<?php

                	while($row = pg_fetch_assoc($ejecucion)){
                        	echo "<tr>";
                                echo "<td>".$row['disco_id']."</td>";
                                echo "<td>".$row['titulo']."</td>";
                                echo "<td>".obtenerNombreGrupo($row['grupo_id'])['nombre']."</td>";
                                echo "<td>".$row['año']."</td>";
                                echo "<td>".$row['genero']."</td>";
                                echo "<td>".obtenerNombreDisquera($row['disquera_id'])['nombre']."</td>";
                                echo "<td>".obtenerNombreProductor($row['productor_id'])['nombre']."</td>";
                                echo "<td>".$row['costo']."</td>";
		?>
				<td class="items-center" style="cursor: pointer;"><a href="editar_discos.php?disco_id=<?php echo $row['disco_id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                		<td class="items-center" style="cursor: pointer;"><a href="eliminar_disco.php?disco_id=<?php echo $row['disco_id']; ?>"><i class="bi bi-trash-fill"></i></a></td>
                                        <?php
					 echo "</tr>";

                                                        }
                                        ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </body>
  <?php require_once 'templates/footer.php'; ?>
