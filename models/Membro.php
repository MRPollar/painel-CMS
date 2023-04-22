<?php

class Membro {
   private $id;
   private $picture;
   private $nome;
   private $sobre;

   public function setId($id){
      $this->id = $id;
   }

   public function getId(){
      return $this->id;
   }


   public function setNome($nome){
      $this->nome = $nome;
   }

   public function getNome(){
      return $this->nome;
   }


   public function setPicture($picture){
      $this->picture = $picture;
   }

   public function getPicture(){
      return $this->picture;
   }


   public function setSobre($sobre){
      $this->sobre = $sobre;
   }

   public function getSobre(){
      return $this->sobre;
   }


}