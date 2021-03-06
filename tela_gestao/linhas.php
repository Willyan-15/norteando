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
<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>
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
               <a class="nav-link" href="control.php">
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
         </div>
       </nav>

       <div class="card" style="margin-left: 35%; margin-right: 5%  ; right: 0px; padding-top: 40px; bottom: 50px; border-color: white "> 
        <div class="card-body" >


        <span style="text-align: right; margin-top: 50px; margin-left: 2%;"> <h1>Minhas Rotas</h1></span>
        <div id="table" class="table-editable" >
        <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a></span>
        <table class="table table-bordered table-responsive-md table-striped text-center" style="width: 900px; ">
        <tr>
        <th class="text-center">Código</th> 
        <th class="text-center">Empresa</th>
        <th class="text-center">Nome da Rota</th>
        <th class="text-center">Saída</th>
        <th class="text-center">Destino</th>
        <th class="text-center">Cidade</th>
        <th class="text-center">Motorista</th>
        <th class="text-center">Valor</th>
        <th class="text-center">Alterar</th>
        </tr>

        <?php 

            require_once("../login/_con.php");

            $connect = mysqli_connect($host,$user,$pass,$db);

            if($connect)
            {
              $sql = "SELECT id_rota,cod_rota, empresa, nome, saida, destino, cidade, motorista, valor FROM rota_emp;";
              $result = mysqli_query($connect, $sql);

              if($result != null)
              {
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                        
                        echo "<tr>";
                        //echo "<td class=\"pt-3-half\">".$row['cod_rota']."</td>";
                        echo "<td class=\"pt-3-half\">".rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9)."</td>";
                        echo "<td class=\"pt-3-half\">".$row['empresa']."</td>";
                        echo "<td class=\"pt-3-half\">".$row['nome']."</td>";
                        echo "<td class=\"pt-3-half\">".$row['saida']."</td>";
                        echo "<td class=\"pt-3-half\">".$row['destino']."</td>";
                        echo "<td class=\"pt-3-half\">".$row['cidade']."</td>";
                        echo "<td class=\"pt-3-half\">".$row['motorista']."</td>";
                        echo "<td class=\"pt-3-half\">".$row['valor']."</td>";
                        echo "<td class=\"pt-3-half\"><span class=\"table-remove\"><a href=\"alterrota.php?id=".$row['id_rota']."\"><button type=\"button\" style=\"background-color:#3CB371; border-block-end-color: #3CB371; color: white\">Altere a Tabela</button></a></span> </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "0 results";
                }
              }
              mysqli_close($connect);

            }
            else{
              echo "nao abriu o banco";
            }


            
            ?>

        </table>
        </div>
        </div>
        </div>  </div>





   <footer style="background-color: #1C1C1C; position:fixed;
   bottom:0;
   width:100%;">
      <strong style="margin-left: 45%; margin-right: 40%; font-size: 12px;  "> <a href="../tela_gestao/site_nort.html#contact1"> © 2018 NORTEANDO - Equipe JPW </a></strong>
      </footer> 
 </body>
</html>
 