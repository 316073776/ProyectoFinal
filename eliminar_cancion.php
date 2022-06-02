<?php 
    require_once 'helpers/helpers.php';
    
	if(!isUser()) header('Location: index.php');

    if(isset($_GET['cancion_id'])){

        $id = $_GET['cancion_id'];
        $sql = "DELETE FROM bdrecords.disco_cancion WHERE cancion_id = $id;";
	    $result = pg_query($con, $sql);
        
        $sql = "DELETE FROM bdrecords.canciones WHERE cancion_id = $id;";

        $result = pg_query($con, $sql);

        header('Location: catalogo_canciones.php');

    }else{

        header('Location: catalogo_canciones.php');
    }

?>
