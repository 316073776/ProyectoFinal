<?php require_once 'templates/header.php'; ?>

<?php 
  if(!isUser()){

    header('Location: index.php');
  }
?>

  <body>
    <?php
                include 'conexion.php';
                $query = "Select disco_id, titulo, año, genero, costo from bdrecords.discos";
                $ejecucion = pg_query($con,$query);
    ?>
    <?php require_once 'templates/menu.php'; ?>
      <div class="flex flex-col justify-center items-center mt-5 mb-5">
        <div class="rounded shadow-lg overflow-hidden w-6/12 flex flex-col p-4">
          <h1 class="uppercase text-indigo-600 font-bold text-4xl mb-5">Catálogo de discos</h1>
          <button id="agregar" class="bg-indigo-700 w-full py-3 px-10 rounded-xl text-white uppercase font-bold mt-5 hover: cursor-pointer hover:bg-indigo-800 md:w-auto">Agregar disco</button>

          </br>
          </br>
          <table class="neumorphic">
            <thead>
              <tr>
                <th>Disco</th>
                <th>Grupo</th>
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
                                echo "<td>".$row['año']."</td>";
                                echo "<td>".$row['genero']."</td>";
                                echo "<td>".$row['costo']."</td>";
		?>
				<td class="items-center" style="cursor: pointer;"><i class="bi bi-pencil-square"></i></td>
                		<td class="items-center" style="cursor: pointer;"><i class="bi bi-trash-fill"></i></td>
                                        <?php       
					 echo "</tr>";

                                                        }
                                        ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  <?php require_once 'templates/footer.php'; ?>
