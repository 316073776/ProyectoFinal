<?php require_once 'templates/header.php'; ?>

<?php 
  if(!isUser()){

    header('Location: index.php');
  }
?>
<body>
    <h2>Catalogo Canciones</h2>

<?php require_once 'templates/footer.php'; ?>
