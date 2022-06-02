<?php require_once 'templates/header.php'; ?>

<?php 
  if(!isUser()){

    header('Location: index.php');
  }
?>

<body class="flex flex-col justify-center items-center">
    <?php
                include 'conexion.php';
                $query = "Select cancion_id, titulo from bdrecords.canciones";
                $ejecucion = pg_query($con,$query);
    ?>
    <?php require_once 'templates/menu.php'; ?>

      <div class="container-forms flex flex-col p-5 mt-5 mb-2">
      <div class="brand-title">CATÁLOGO DE CANCIONES</div>
      <div class="btn-add">
        <a class="mt-5" href="form_canciones.php">AGREGAR CANCIÓN</a>
      </div>
    </div>

    <div class="flex flex-col justify-center items-center mt-5 mb-5">
      <div class="overflow-hidden flex flex-col p-4">
          <table class="neumorphic">
            <thead>
              <tr>
                <th>ID</th>
                <th>TÍtulo</th>
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
