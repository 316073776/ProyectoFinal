<?php 
    require_once 'helpers/helpers.php';
    
	if(!isUser()) header('Location: index.php');

    if(isset($_GET['grupo_id'])){

        $id = $_GET['grupo_id'];
        $sql = "DELETE FROM bdrecords.grupos WHERE grupo_id = $id;";

        $result = pg_query($con, $sql);

        header('Location: catalogo_grupos.php');

    }else{

        header('Location: catalogo_grupos.php');
    }

?>
