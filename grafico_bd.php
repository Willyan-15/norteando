<?php 

require_once("_con.php");



$connect = mysqli_connect($host,$user,$pass,$db);
if($connect)
{
    echo 'conectou';
}
else{
    echo "nao abriu o banco";
}


$sql = "SELECT cod_contrato,data_inicio,data_termino,valor_contrato FROM contrato";






$consulta = mysqli_query($connect,$sql);

$cont_pagos = 0;
$cont_n_pagos = 0;



echo '<table> ';


echo '<tr>';


echo '<td> cod_contrato </td>';

echo '<td> data_inicio </td>';

echo '<td> data_termino </td>';

echo '<td> valor_contrato </td>';

echo '</tr>';

// Armazena os dados da consulta em um array associativo

while($registro = mysqli_fetch_assoc($consulta)){

echo '<tr>';

echo '<td>' .$registro['cod_contrato']. '</td>';
echo ' ';
echo '<td>' .$registro['data_inicio']. '</td>';
echo ' ';
echo '<td>' .$registro['data_termino']. '</td>';
echo ' ';
echo '<td>' .$registro['valor_contrato']. '</td>';
echo ' ';
echo '</tr>';



echo '</table>';

if($registro['cod_contrato'] == 1  )

    $cont_pagos++;


else if($registro['cod_contrato'] == 2)

    $cont_n_pagos++;
}
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Sua mãe', 'Hours per Day'],
          ['Contratos pagos', <?php echo $cont_pagos;?> ],
          ['Contratos em debito', <?php echo $cont_n_pagos;?>]
         
        ]);

        var options = {
          title: 'WILLYAN TROXA'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>

    

        
      
    </script>
  </body>
</html>

