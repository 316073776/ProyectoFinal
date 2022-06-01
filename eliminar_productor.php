<?php 
    require_once 'helpers/helpers.php';
    
	if(!isUser()) header('Location: index.php');

    if(isset($_GET['productor_id'])){

        $id = $_GET['productor_id'];
        $sql = "DELETE FROM bdrecords.productores WHERE productor_id = $id;";

        $result = pg_query($con, $sql);

        header('Location: catalogo_productores.php');

    }else{

        header('Location: catalogo_productores.php');
    }

?>
