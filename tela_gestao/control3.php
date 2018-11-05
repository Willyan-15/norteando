<?php


require_once("_con.php");



$connect = mysqli_connect($host,$user,$pass,$db);
if($connect)
{
    echo "conectou<br>";
}
else{
    echo "nao abriu o banco";
}


$sql = 'SELECT c.nome_contratante FROM contratante c INNER JOIN contrato p ON c.cod_contratante = p.cod_passageiro';




$consulta = mysqli_query($connect,$sql);

if ($consulta){
    echo"deu certo <br>";
}
else{
    echo "deu errado";
}

while($registro = mysqli_fetch_assoc($consulta)){

    echo '<tr>';
    
    echo '<td>'.$registro["nome_contratante"].'</td> <br>';
   
    
    echo '</tr>';
    
    }


?>