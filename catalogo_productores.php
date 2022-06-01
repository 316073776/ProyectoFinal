<?php require_once 'templates/header.php'; ?>

<?php 
  if(!isUser()){

    header('Location: index.php');
  }
?>
<body>
    <h2>Catalogo Productores</h2>

<?php require_once 'templates/footer.php'; ?>