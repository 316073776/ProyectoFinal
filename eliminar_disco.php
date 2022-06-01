<?php 
    require_once 'helpers/helpers.php';
    
	if(!isUser()) header('Location: index.php');

    if(isset($_GET['disco_id'])){

        $id = $_GET['disco_id'];
	$sql = "DELETE FROM bdrecords.disco_cancion WHERE disco_id = $id;";
	$result = pg_query($con, $sql);
        $sql = "DELETE FROM bdrecords.discos WHERE disco_id = $id;";

        $result = pg_query($con, $sql);

        header('Location: catalogo_discos.php');
            
        

    }else{

        header('Location: catalogo_discos.php');
    }

?>
