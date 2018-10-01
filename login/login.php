<?php 
  $login = $_POST['login'];
  
  $senha = md5($_POST['senha']);

  









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
             
      $verifica = mysqli_query($connect, "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'");

      $count = mysqli_num_rows($verifica);
      

      if($count == 1){

        

            header('Location: /teste/pagina_inicial.html');
        }
        else{
        

            header('Location: login_html.html');

            
        }
    }
?>
