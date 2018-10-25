<?php 

  $email = $_POST['email'];
  $senha = $_POST['senha'];


  $entrar = $_POST['entrar'];



//$array = mysqli_fetch_array($select); verificar



  require_once("_con.php");

$connect = mysqli_connect($host,$user,$pass,$db);

//$senha_crip = md5($senha);

if($connect)
{
    echo "conectou";
}
else{
    echo "nao abriu o banco";
}
    if (isset($entrar)) {
             
      $verifica = mysqli_query($connect, "SELECT email_contratante,senha FROM contratante WHERE email_contratante = '$email' AND senha = '$senha'");

      $count = mysqli_num_rows($verifica);
      

     if($count == 1){

        

            header('Location: http://localhost/norteando-git/norteando/grafico_bd.php');
        }
     else{
        

            header('Location: http://localhost/norteando-git/norteando/grafico_bd.php');

            
        }
   }
?>
