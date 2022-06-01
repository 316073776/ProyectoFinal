<?php require_once 'templates/header.php'; ?>

<?php 
  if(!isUser()){

    header('Location: index.php');
  }
?>
<body>
    <h2>Catalogo Compositores</h2>

<?php require_once 'templates/footer.php'; ?>
