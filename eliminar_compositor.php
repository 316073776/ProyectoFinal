<?php 
    require_once 'helpers/helpers.php';
    
	if(!isUser()) header('Location: index.php');

    if(isset($_GET['compositor_id'])){

        $id = $_GET['compositor_id'];
        $sql = "DELETE FROM bdrecords.compositores WHERE compositor_id = $id;";

        $result = pg_query($con, $sql);

        header('Location: catalogo_compositores.php');

    }else{

        header('Location: catalogo_compositores.php');
    }

?>
