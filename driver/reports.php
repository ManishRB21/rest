<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<link href="../vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<?php include 'includes/header.php'?>
    <!-- Datatable -->
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <?php include 'includes/topbar.php'?>
        <?php include 'includes/sidebar.php'?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4><i class="mdi mdi-chart-bar-stacked"></i> Commission Report</h4>
                        </div>
                    </div>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered mytable"> 
                              <thead>
                                 <tr>
                                     <th>Month</th>
                                     <th>Commission</th>
                                 </tr>
                             </thead>
                                    <tbody>
                                       <tr>
                                           <td>January</td>
                                           <td>500</td>
                                       </tr>
                                       <tr>
                                           <td>February</td>
                                           <td>750</td>
                                       </tr>
                                       <tr>
                                           <td>March</td>
                                           <td>750</td>
                                       </tr>
                                       <tr>
                                           <td>April</td>
                                           <td>750</td>
                                       </tr>
                                       <tr>
                                           <td>May</td>
                                           <td>750</td>
                                       </tr>
                                       <tr>
                                           <td>June</td>
                                           <td>500</td>
                                       </tr>
                                       <tr>
                                           <td>July</td>
                                           <td>950</td>
                                       </tr>
                                       <tr>
                                           <td>August</td>
                                           <td>750</td>
                                       </tr>
                                       <tr>
                                           <td>September</td>
                                           <td>750</td>
                                       </tr>
                                       <tr>
                                           <td>October</td>
                                           <td>750</td>
                                       </tr>
                                       <tr>
                                           <td>November</td>
                                           <td>1,000</td>
                                       </tr>
                                       <tr>
                                           <td>December</td>
                                           <td>1,250</td>
                                       </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="bargraph" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <?php include 'includes/footer.php'?>
    <script src="../js/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            // Bar Chart

            var barChartData = {
                labels: ["January","February","March","April","May","June","July","August","September","October","November","December"],
                datasets: [{
                    label: 'Commission',
                    backgroundColor: 'rgb(45,34,23)',
                    borderColor: 'rgba(0, 158, 251, 1)',
                    borderWidth: 1,
                    data: [500,750,500,1000,1250,750,500,1000,750,1250,500,1250]
                }]
            };

            var ctx = document.getElementById('bargraph').getContext('2d');
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        display: false,
                    }
                }
            });

        });
    </script>
</body>

</html>