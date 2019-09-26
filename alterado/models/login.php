<?php

session_start();
require_once('classes/conexao.php');
 
Class Login{
 
   function __construct(){
      $objConnection = new Connection();
   }
 
   function verificarLogado(){
      if(!isset($_SESSION["logado"])){
         header("Location: dirname(__FILE__)/../entrar.php");
         exit();
      }
   }
 
   function Logar($email,$senha){
      $q_usuario = mysql_query("select * from usuario where usuario.email ='".$email."'");
 
      if(mysql_num_rows($q_usuario) == 1){
         $d_usuario = mysql_fetch_array($q_usuario);
         if($d_usuario["senha"] == $senha){
            $_SESSION["cod_user"] = $d_usuario["cod_user"];
            $_SESSION["logado"] = "sim";
            header("Location: dirname(__FILE__)/../welcome.php");
         }else{
            $Erro = "Senha e/ou Email errado(s)!";
            return $Erro;
         }
      }else{
         $Erro = "Senha e/ou Email errado(s)!";
         return $Erro;
      };
   }
 
   function getIdUsuario(){
      return $_SESSION["cod_user"];
   }
 
   function deslogar(){
      session_destroy();
      header("Location: dirname(__FILE__)/../index.php");
   }
 
}
?>