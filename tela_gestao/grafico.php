









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

   <!-- Containers do site W3 -->
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
       <nav class="col-md-2 d-none d-md-block bg-light sidebar">
         <div class="sidebar-sticky">
           <ul class="nav flex-column">
            <br><br> <li class="nav-item">
               <a class="nav-link active" href="site_nort.html">
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
                 Gráficos Monetários
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="control.html">
                 <span data-feather="layers"></span>
                 Controle dos Contratos
               </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" href="linhas.html">
                <span data-feather="settings"></span>
                Linhas
              </a>
            </li>
           </ul>
           </ul>
         </div>
       </nav>
       
       
   
       
       
       
       <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
        </script>
       <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
        </script>
        
        
<span style="text-align: center; margin-top: 50px; margin-left: 40px;"><h1>Receita</h1></span>


    <canvas id="myChart" style="max-height: 900px; max-width: 900px; margin-top: 120px"></canvas>

       <script> 
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
        </script>


       <canvas id="barChart"></canvas>
       <script>
       //bar
var ctxB = document.getElementById("barChart").getContext('2d');
var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});



//////////////////////////////////////////////////////////////
</script>

<canvas id="pieChart"></canvas>

<script>
  //pie
var ctxP = document.getElementById("pieChart").getContext('2d');
var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [
            {
                data: [300, 50, 100, 40, 120],
                backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
            }
        ]
    },
    options: {
        responsive: true
    }
});
</script>



<span class="min-chart" id="chart-sales" data-percent="56"><span class="percent"></span></span>
<span class="min-chart" id="chart-sales" data-percent="56"><span class="percent"></span></span>
<h5><span class="label green">Sales <i class="fa fa-arrow-circle-up"></i></span></h5>
<script>
$(function () {
  $('.min-chart#chart-sales').easyPieChart({
      barColor: "#4caf50",
      onStep: function (from, to, percent) {
          $(this.el).find('.percent').text(Math.round(percent));
      }
  });
});
</script>
<div class="text-center">
    <span class="min-chart" id="chart-sales" data-percent="56"><span class="percent"></span></span>
    <h5><span class="label green">Sales <i class="fa fa-arrow-circle-up"></i></span></h5>
</div>




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
         labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
         datasets: [{
           //data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
           data: [15, 21, 18, 24, 23, 24, 12, 15, 21, 18, 24, 23],
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
 