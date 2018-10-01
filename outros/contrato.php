
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


$sql = "SELECT data_inicio,data_termino,valor_contrato FROM contrato";

$consulta = mysqli_query($connect,$sql);

echo '<table>';

echo '<tr>';

echo '<td>data_inicio</td>';

echo '<td>data_termino</td>';

echo '<td>valor_contrato</td>';

echo '</tr>';

// Armazena os dados da consulta em um array associativo

while($registro = mysqli_fetch_assoc($consulta)){

echo '<tr>';

echo '<td>'.$registro["data_inicio"].'</td>';

echo '<td>'.$registro["data_termino"].'</td>';

echo '<td>'.$registro["valor_contrato"].'</td>';

echo '</tr>';

}

echo '</table>';


?>