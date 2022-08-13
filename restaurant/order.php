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
                            <h4><i class="mdi mdi-cart-plus"></i> Order List</h4>
                        </div>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Order Code</th>
                                                <th>Customer</th>
                                                <th>Date</th>
                                                <th>Food</th>
                                                <th>Charge</th>
                                                <th>Total Amount</th>
                                                <th>Driver</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ORDR-242-21</td>
                                                <td>Sima son</td>
                                                <td>Nov 29, 2021</td>
                                                <td><img class="img-fluid" src="../images/tab/6.jpg" alt="" width="50"></td>
                                                <td>50.00</td>
                                                <td>200.00</td>
                                                <td>Joshua Guzman</td>
                                                <td><span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														canceled
													</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ORDR-987-21</td>
                                                <td>John Alva</td>
                                                <td>Nov 29, 2021</td>
                                                <td><img class="img-fluid" src="../images/tab/4.jpg" alt="" width="50"></td>
                                                <td>50.00</td>
                                                <td>250.00</td>
                                                <td>Joshua Guzman</td>
                                                <td><span class="badge light badge-success">
														<i class="fa fa-circle text-success mr-1"></i>
														delivered
													</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ORDR-242-21</td>
                                                <td>Bradley Greer</td>
                                                <td>Nov 29, 2021</td>
                                                <td><img class="img-fluid" src="../images/tab/1.jpg" alt="" width="50"></td>
                                                <td>50.00</td>
                                                <td>290.00</td>
                                                <td>Joshua Guzman</td>
                                                <td><span class="badge light badge-success">
														<i class="fa fa-circle text-success mr-1"></i>
														delivered
													</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ORDR-876-21</td>
                                                <td>Fox Well</td>
                                                <td>Nov 29, 2021</td>
                                                <td><img class="img-fluid" src="../images/tab/8.jpg" alt="" width="50"></td>
                                                <td>50.00</td>
                                                <td>350.00</td>
                                                <td>Joshua Guzman</td>
                                                <td><span class="badge light badge-success">
														<i class="fa fa-circle text-success mr-1"></i>
														delivered
													</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
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

</body>

</html>