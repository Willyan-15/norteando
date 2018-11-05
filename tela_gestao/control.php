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


$sql = 'SELECT c.nome_contratante,c.cod_contratante,p.data_inicio,p.prox_pag FROM contratante c 

INNER JOIN contrato p ON c.cod_contratante = p.cod_passageiro';




$consulta = mysqli_query($connect,$sql);

if ($consulta){
    echo"deu certo <br>";
}
else{
    echo "deu errado";
}

echo '<table border="3px"> ';


echo '<tr>';


echo '<td> Nome </td>';

echo '<td>cod contrato</td>';

echo '<td>data inicio</td>';

echo '<td>prox pag</td>';




echo '</tr>';

while($registro = mysqli_fetch_assoc($consulta)){

    echo '<tr>';

echo '<td>' .$registro['nome_contratante']. '</td>';

echo '<td>' .$registro['cod_contratante']. '</td>';

echo '<td>' .$registro['data_inicio']. '</td>';

echo '<td>' .$registro['prox_pag']. '</td>';


echo '</tr>';
    
    }



    

?>


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
     <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="site_nort.html">Norteando - Versão Gestor</a>
     <ul class="navbar-nav px-3">
       <li class="nav-item text-nowrap">
         <a class="nav-link" href="#">Saída</a>
       </li>
     </ul>
   </nav>

   <div class="container-fluid">
     <div class="row">

        <div class="page-row row page-row-expanded">

       <nav class="col-md-2 d-none d-md-block bg-light sidebar">
         <div class="sidebar-sticky" style="width: 280px; position: fixed; top: 0; bottom: 0; background: #F2F2F2;">
           <ul class="nav flex-column">
            <br><br> <li class="nav-item">
               <a class="nav-link active" href="tela_entrada.html">
                 <span data-feather="home"></span>
                <span class="sr-only">(current)</span>
               Página Inicial
            </a>
             </li>
      
             <li class="nav-item">
               <a class="nav-link" href="cad.html">
                 <span data-feather="dollar-sign"></span>
                 Controle de Pagamentos
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="grafico.html">
                 <span data-feather="bar-chart-2"></span>
                 Gráficos
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="control.html">
                 <span data-feather="layers"></span>
                 Controle dos Contratos
               </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" href="linhas.php">
                <span data-feather="settings"></span>
                Linhas
              </a>
            </li>
           </ul>
           </ul>
          </div></div>
          </div>
       </nav>

      

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

<footer style="background-color: #1C1C1C; position:fixed;
   bottom:0;
   width:100%;">
      <strong style="margin-left: 45%; margin-right: 40%; font-size: 12px;  "> <a href="../tela_gestao/site_nort.html#contact1"> © 2018 NORTEANDO - Equipe JPW </a></strong>
      </footer> 
</html>
 