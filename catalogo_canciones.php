<?php require_once 'templates/header.php'; ?>

<?php 
  if(!isUser()){

    header('Location: index.php');
  }
?>
<body>
    <?php
                include 'conexion.php';
                $query = "Select cancion_id, titulo from bdrecords.canciones";
                $ejecucion = pg_query($con,$query);
    ?>
    <?php require_once 'templates/menu.php'; ?>
      <div class="flex flex-col justify-center items-center mt-5 mb-5">
        <div class="rounded shadow-lg overflow-hidden flex flex-col p-4">
          <h1 class="uppercase text-indigo-600 font-bold text-4xl mb-5">Catálogo de canciones</h1>
          <a href="form_canciones.php" class="bg-indigo-700 w-full py-3 px-10 rounded-xl text-white text-center uppercase font-bold mt-5 hover: cursor-pointer hover:bg-indigo-800 md:w-auto">Agregar cancion</a>

          </br>
          </br>
          <table class="neumorphic">
            <thead>
              <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
		<?php

                	while($row = pg_fetch_assoc($ejecucion)){
                        	echo "<tr>";
                                echo "<td>".$row['cancion_id']."</td>";
                                echo "<td>".$row['titulo']."</td>";
		?>
				<td class="items-center" style="cursor: pointer;"><a href="editar_canciones.php?cancion_id=<?php echo $row['cancion_id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                		<td class="items-center" style="cursor: pointer;"><a href="eliminar_cancion.php?cancion_id=<?php echo $row['cancion_id']; ?>"><i class="bi bi-trash-fill"></i></a></td>
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
