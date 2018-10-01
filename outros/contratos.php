<!doctype html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="icon" href="../../../../favicon.ico">

   <title>Controle dos Contratos</title>

   <!-- Bootstrap core CSS -->
   <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="dashboard.css" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

 <body>
   <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
     <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Norteando</a>
     <ul class="navbar-nav px-3">
       <li class="nav-item text-nowrap">
         <a class="nav-link" href="#">Saída</a>
       </li>
     </ul>
   </nav>

   <div class="container-fluid">
     <div class="row">
       <nav class="col-md-2 d-none d-md-block bg-light sidebar">
         <div class="sidebar-sticky">
           <ul class="nav flex-column">
            <br><br> <li class="nav-item">
               <a class="nav-link active" href="#">
                 <span data-feather="home"></span>
                <span class="sr-only">(current)</span>
               Página Principal
            </a>
             </li>
      
             <li class="nav-item">
               <a class="nav-link" href="#">
                 <span data-feather="users"></span>
                 Lista de Funcionários
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">
                 <span data-feather="bar-chart-2"></span>
                 Gráficos Monetários
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">
                 <span data-feather="layers"></span>
                 Controle dos Contratos
               </a>
             </li>
           </ul>
           </ul>
         </div>
       </nav>




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


$sql = "SELECT cod_contrato,data_inicio,data_termino,valor_contrato FROM contrato";




$consulta = mysqli_query($connect,$sql);



echo "<br><br>dunha";

echo '<table> ';


echo '<tr>';


echo '<td>cod_contrato</td>';

echo '<td>data_inicio</td>';

echo '<td>data_termino</td>';

echo '<td>valor_contrato</td>';

echo '</tr>';

// Armazena os dados da consulta em um array associativo

while($registro = mysqli_fetch_assoc($consulta)){

echo '<tr>';

echo '<td>'.$registro["cod_contrato"].'</td>';

echo '<td>'.$registro["data_inicio"].'</td>';

echo '<td>'.$registro["data_termino"].'</td>';

echo '<td>'.$registro["valor_contrato"].'</td>';

echo '</tr>';

}

echo '</table>';


?>







    
   <!-- Bootstrap core JavaScript
   ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
   <script src="../../assets/js/vendor/popper.min.js"></script>
   <script src="../../dist/js/bootstrap.min.js"></script>

   <!-- Icons -->
   <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
   <script>
     feather.replace()
   </script>

   <!-- Graphs -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
   <script>
     var ctx = document.getElementById("myChart");
     var myChart = new Chart(ctx, {
       type: 'line',
       data: {
         labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
         datasets: [{
           data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
           lineTension: 0,
           backgroundColor: 'transparent',
           borderColor: '#007bff',
           borderWidth: 4,
           pointBackgroundColor: '#007bff'
         }]
       },
       options: {
         scales: {
           yAxes: [{
             ticks: {
               beginAtZero: false
             }
           }]
         },
         legend: {
           display: false,
         }
       }
     });
   </script>
 </body>
</html>
 