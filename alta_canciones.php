<?php
	include 'conexion.php';
	$titulo = strip_tags($_POST['titulo']);
	$disco_id = isset($_POST['disco_id']) ? strip_tags($_POST['disco_id']) : null;


	if(preg_match('/[A-Z a-z áéíóúñ]{2,50}/i', $titulo)){

		$insercion= "insert into bdrecords.canciones(titulo) values('$titulo') RETURNING cancion_id;";
        $query = pg_query($con,$insercion);
		$id = pg_fetch_array($query);
		$cancion_id = $id[0];


		if($query){

			if($disco_id){

				$sql = "INSERT INTO disco_cancion (disco_id, cancion_id) VALUES ($disco_id, $cancion_id);";
				$query = pg_query($con,$insercion);
				
				if($query){

					echo "Se ha almacenado en la base de datos de forma correcta ";
				}else{

					echo "  No se ha podido almacenar en la base de datos  ";
				}
			}
            
			echo "Se ha almacenado en la base de datos de forma correcta ";
			
        	
		} else {
                	
			echo "  No se ha podido almacenar en la base de datos  ";
        	
		}
        	
		pg_close($con);

	}else {
		echo "  Los datos no son validos  ";
	}
?>
