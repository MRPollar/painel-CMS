<?php

   require_once "db.php";
   require_once "models/Membro.php";
   require_once "helpers.php";

   $id = $_GET['id'];
   $membro = recupera_membro($conexao, $id);
   deleta_membro($conexao, $id);

   unlink("src/uploads/".$membro->getPicture());

   header('Location: ./');



?>