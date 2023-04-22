<?php

define('DB_DSN', 'mysql:host=localhost;dbname=bootstrap_projeto');
define('DB_USER', 'root');
define('DB_PASS', "");



try{
   $conexao = new PDO(DB_DSN, DB_USER,DB_PASS);
}catch(PDOException $e){
   echo $e->getMessage();
}


?>