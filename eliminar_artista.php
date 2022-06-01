<?php 
    require_once 'helpers/helpers.php';
    
	if(!isUser()) header('Location: index.php');

    if(isset($_GET['artista_id'])){

        $id = $_GET['artista_id'];
        $sql = "DELETE FROM bdrecords.artistas WHERE artista_id = $id;";

        $result = pg_query($con, $sql);

        header('Location: catalogo_artistas.php');

    }else{

        header('Location: catalogo_artistas.php');
    }

?>
