<?php require_once 'templates/header.php'; ?>

<?php 
  if(!isUser()){

    header('Location: index.php');
  }

?>

  <body>
    <?php
                include 'conexion.php';
                $query = "Select disco_id, titulo, grupo_id, año, genero, disquera_id, productor_id, costo from bdrecords.discos";
                $ejecucion = pg_query($con,$query);
    ?>
    <?php require_once 'templates/menu.php'; ?>
      <div class="flex flex-col justify-center items-center mt-5 mb-5">
        <div class="rounded shadow-lg overflow-hidden flex flex-col p-4">
          <h1 class="uppercase text-indigo-600 font-bold text-4xl mb-5">Catálogo de discos</h1>
          <a href="form_discos.php" class="bg-indigo-700 w-full py-3 px-10 rounded-xl text-white text-center uppercase font-bold mt-5 hover: cursor-pointer hover:bg-indigo-800 md:w-auto">Agregar disco</a>

          </br>
          </br>
          <table class="neumorphic">
            <thead>
              <tr>
		<th>ID</th>
                <th>Titulo</th>
		<th>Grupo</th>
		<th>Año</th>
		<th>Genero</th>
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
                                echo "<td>".$row['disquera_id']."</td>";
                                echo "<td>".$row['productor_id']."</td>";
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
