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


$sql = 'SELECT cod_contrato,data_inicio,prox_pag FROM contrato';







$cont_pagos = 0;
$cont_n_pagos = 0;



echo '<table border="3px"> ';


echo '<tr>';


echo '<td> cod_contrato </td>';

echo '<td> data_inicio </td>';

echo '<td> prox_pag </td>';


echo '</tr>';

// Armazena os dados da consulta em um array associativo

$consulta = mysqli_query($connect,$sql);


while($registro = mysqli_fetch_assoc($consulta)){

echo '<tr>';

echo '<td>' .$registro['cod_contrato']. '</td>';

echo '<td>' .$registro['data_inicio']. '</td>';
echo ' ';
echo '<td>' .$registro['prox_pag']. '</td>';


echo '</tr>';




if($registro['cod_contrato'] == 1  )

    $cont_pagos++;


else if($registro['cod_contrato'] == 2)

    $cont_n_pagos++;
}


echo '</table>';


?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Não', 'Sei'],
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

