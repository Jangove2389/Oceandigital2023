<?php 
require 'conexion.php';

$nomape = $_POST['nomape'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$comentario =$_POST['Comentario'];

if($nomape == "" || $email=="" || $celular==0 || $comentario==""){

        echo "Parece que hay valores vacios";
      
}  else{
            $sqlinsertarUsuario = "INSERT INTO  usuarios(id,nomape,email,celular,Comentario ) values 
            (NULL,'$nomape','$email','$celular','$comentario')";
            $resultado=mysqli_query($conexion, $sqlinsertarUsuario);

            if($resultado){
                echo "la insercion fue existosa";

            }else{
                "no se a podido realizar";
            }
            mysqli_close($conexion);
        }

?>