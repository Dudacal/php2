<?php
   include "conecta.php";

   echo "<br><br>";
   echo "<b>Mostrando todos os registros</b><br>";
   $sql = "SELECT id, nome, senha, email FROM usuario";
   $resultado = mysqli_query($conexao, $sql);
   echo "<br>";
   if (mysqli_num_rows($resultado) > 0) {
    while($registro = mysqli_fetch_assoc($resultado)){
        echo "id: " . $registro["id"]. " - Nome: " . $registro["nome"].
        "" . $registro["senha"]. " - Email: " . $registro["email"]. 
        "<br>";
    }
   } else {
    echo "Nenhum registro encontrado.";
   }
   echo "<br>";
   echo "<b>Nomes que começam com 'M' </b><br>";
   $sql = "SELECT id, nome, senha, email FROM usuario where nome like 'm%'";
   $resultado = mysqli_query($conexao, $sql);
   echo "<br>";
   if (mysqli_num_rows($resultado) > 0) {
    while($registro = mysqli_fetch_assoc($resultado)){
        echo "id: " . $registro["id"]. " - Nome: " . $registro["nome"].
        "" . $registro["senha"]. " - Email: " . $registro["email"]. 
        "<br>";
    }
   } else {
    echo "Nenhum registro encontrado.";
   }
   
   echo "<br>";
   echo "<b> Ordenar os registros por email</b><br>";
   $sql = "SELECT id, nome, senha, email FROM usuario order by email";
   $resultado = mysqli_query($conexao, $sql);
   echo "<br>";
   if (mysqli_num_rows($resultado) > 0) {
    while($registro = mysqli_fetch_assoc($resultado)){
        echo "id: " . $registro["id"]. " - Nome: " . $registro["nome"].
        "" . $registro["senha"]. " - Email: " . $registro["email"]. 
        "<br>";
    }
   } else {
    echo "Nenhum registro encontrado.";
   }


   echo "<br>";
   echo "<b>Verificar se existe usuário='Duda' com senha 123 e mostrar seu email.Caso não exista, mostrar uma mensagem</b><br>";
   $sql = "SELECT id, nome, senha, email FROM usuario where nome='Duda' and senha='123'";
   $resultado = mysqli_query($conexao, $sql);
   echo "<br>";
   if (mysqli_num_rows($resultado) > 0) {
    while($registro = mysqli_fetch_assoc($resultado)){
        echo "Email: " . $registro["email"]. "<br>";
        
    }
   } else {
    echo "Nenhum registro encontrado.";
   }


?>