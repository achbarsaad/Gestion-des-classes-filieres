<?php include_once("partages/header.php");?>
<?php include_once("partages/sideMenu.php");  ?>
<?php
include_once './racine.php';
?>        
<script src="script/chart.js" type="text/javascript"></script>
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Chart</h2>
                                
                            </div>
                        </div>
                    </div>
		<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"><strong>Les classes de chaque filliere</h5>
                                <div class="card-body">
                                    <canvas id="myChart" width="230" height="100"></canvas>
            <script>
                var ctx = document.getElementById('myChart').getContext('2d');
                $.ajax({
                url: 'controller/gestionStatistique.php',
                        data: {op: ''},
                        type: 'POST',
                        success: function (data, textStatus, jqXHR) {
                                var x = Array();
                                var y = Array();
                                data.forEach(function (e) {
                                x.push(e.id_filiere);
                                        y.push(e.nbr);
                                });
                                showGraph(x, y);
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                        console.log(textStatus);
                        }
                });
                        var haha= [
                        'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                        ];
                function showGraph(x, y) {
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: x,
                            datasets: [{
                                    data: y,
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',
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
                            plugins: {
                                legend: {
                                    display: true,
                                    position: 'right',
                                    labels: {
                                        generateLabels: function (chart) {
                                            return chart.data.labels.map(function (label, i) {
                                                return {
                                                    text: label,
                                                    fillStyle: haha[i],
                                                };
                                            });
                                        }
                                    }
                                },
                                title: {
                                    display: true,
                                    text: 'Nombre des classes par filière'
                                }
                            },
                            scales: {
                                y: {
                                    title: {
                                        display: true,
                                        text: 'Nombre des classes'
                                    }
                                },
                                x: {
                                    title: {
                                        display: true,
                                        text: 'Filière'
                                    }
                                }
                            }
                        }
                    });
                }
            </script>

                                </div>

                                
                                     
            <div>
            
            </div>
                               
                            </div>
                        </div>
                    </div>

<style>
.btn-primary {
    color: black;
    background-color: rgb(255, 250, 240);
    border-color: #5969ff;
    idth :auto;
	border-radius : 10px;
	padding :10px;
	
	font-size : 15px;
	font-weight : bold;
	cursor : grabbing;
         text-align: center;
}
.btn-secondary:hover {
    text-align: center;
    width: 100%;
    height: 50%;
     background-color: rgb(255, 250, 240);
	color : #fff;
        
}
         
</style>