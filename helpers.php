<?php

function tratar_image($picture){
   $padrao = '/^.+(\.jpg|\.png)$/';
   $resultado = preg_match($padrao, $picture['name']);

   if(!$resultado){
      return false;
   }

   move_uploaded_file($picture['tmp_name'], "src/uploads/{$picture['name']}");

   return true;
}

function salvarMembro($data, $conexao){
   $insertSql = "INSERT INTO `tb_equipe` VALUES (null,:nome,:sobre,:picture)";

   $sql = $conexao->prepare($insertSql);

   $sql->execute([
      'nome' => $data->getNome(),
      'sobre' => $data->getSobre(),
      'picture' => $data->getPicture()   
   ]);
}

function recupera_equipe($conexao){
   $sqlBusca = "SELECT * FROM `tb_equipe`";
   
   $resultado = $conexao->query($sqlBusca,PDO::FETCH_CLASS,'Membro');

   $equipe = [];

   foreach($resultado as $membro){
      $equipe[] = $membro;
   }

   return $equipe;
}

function recupera_membro($conexao, $id){
   $sqlBusca = "SELECT * FROM `tb_equipe` WHERE id=:id";

   $resultado = $conexao->prepare($sqlBusca);

   $resultado->execute([
      'id' => $id   
   ]);

   $membro = $resultado->fetchObject('Membro');

   return $membro;
}

function deleta_membro($conexao, $id){
   $sqlDelete = "DELETE FROM `tb_equipe` WHERE id=:id";

   $sql = $conexao->prepare($sqlDelete);
   $sql->execute([
      'id' => $id   
   ]);
}

?>