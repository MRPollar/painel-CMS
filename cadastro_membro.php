<?php
$membro = new Membro();
$erroMembro = false;
$arrErrMembro = [];

if(array_key_exists("member", $_POST)){
   

   if($_POST['member']['name'] != ""){
      $membro->setNome($_POST['member']['name']);
   } else {
      $erroMembro = true;
      $arrErrMembro["nome"] = "Informe o nome do membro da equipe";
   }

   if($_POST['member']['sobre'] != ""){
      $membro->setSobre($_POST['member']['sobre']);
   } else {
      $erroMembro = true;
      $arrErrMembro["sobre"] = "Forneça as informações profissionais do membro de equipe";
   }

   if(tratar_image($_FILES['picture'])){
      $membro->setPicture($_FILES['picture']['name']);
   } else {
      $erroMembro = true;
      $arrErrMembro["picture"] = "Formato de imagem inválido(formatos válidos .jpg e .png)";
   }

   if($erroMembro === false){
      salvarMembro($membro,$conexao);
      header('Location: ./');
   }
}
?>