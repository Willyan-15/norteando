<?php


require_once("_con.php");



$connect = mysqli_connect($host,$user,$pass,$db);
if($connect)
{
    echo "conectou";
}
else{
    echo "nao abriu o banco";
}



$sql = "SELECT c.cod_contratante, c.nome
FROM contratante c
INNER JOIN contrato p ON p.cod_contratante = p.cod_passageiro";




$consulta = mysqli_query($connect,$sql);


while($registro = mysqli_fetch_assoc($consulta)){

    echo '<tr>';
    
    echo '<td>'.$registro["nome"].'</td>';
   
    
    echo '</tr>';
    
    }


?>