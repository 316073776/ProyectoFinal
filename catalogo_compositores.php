<?php require_once 'templates/header.php'; ?>

<?php 
  if(!isUser()){

    header('Location: index.php');
  }
?>
<body>
    <?php
                include 'conexion.php';
                $query = "Select compositor_id, nombre, apellido, pais_nacimiento, fecha_nacimiento from bdrecords.compositores";
                $ejecucion = pg_query($con,$query);
    ?>
    <?php require_once 'templates/menu.php'; ?>
      <div class="flex flex-col justify-center items-center mt-5 mb-5">
        <div class="rounded shadow-lg overflow-hidden flex flex-col p-4">
          <h1 class="uppercase text-indigo-600 font-bold text-4xl mb-5">Catálogo de compositores</h1>
          <a href="form_compositores.php" class="bg-indigo-700 w-full py-3 px-10 rounded-xl text-white text-center uppercase font-bold mt-5 hover: cursor-pointer hover:bg-indigo-800 md:w-auto">Agregar compositor</a>

          </br>
          </br>
          <table class="neumorphic">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
		<th>Apellido</th>
		<th>Pais de nacimiento</th>
		<th>Fecha de nacimiento</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
		<?php

                	while($row = pg_fetch_assoc($ejecucion)){
                        	echo "<tr>";
                                echo "<td>".$row['compositor_id']."</td>";
                                echo "<td>".$row['nombre']."</td>";
                                echo "<td>".$row['apellido']."</td>";
                                echo "<td>".$row['pais_nacimiento']."</td>";
                                echo "<td>".$row['fecha_nacimiento']."</td>";
		?>
				<td class="items-center" style="cursor: pointer;"><a href="editar_compositores.php?compositor_id=<?php echo $row['compositor_id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                		<td class="items-center" style="cursor: pointer;"><a href="eliminar_compositor.php?compositor_id=<?php echo $row['compositor_id']; ?>"><i class="bi bi-trash-fill"></i></a></td>
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
