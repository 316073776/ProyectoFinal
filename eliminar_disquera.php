<?php 
    require_once 'helpers/helpers.php';
    
	if(!isUser()) header('Location: index.php');

    if(isset($_GET['disquera_id'])){

        $id = $_GET['disquera_id'];
        $sql = "DELETE FROM bdrecords.disqueras WHERE disquera_id = $id;";

        $result = pg_query($con, $sql);

        header('Location: catalogo_disqueras.php');

    }else{

        header('Location: catalogo_disqueras.php');
    }

?>
