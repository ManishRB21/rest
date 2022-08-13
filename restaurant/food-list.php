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
                            <h4><i class="mdi mdi-food"></i> List of Foods</h4>
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
                                                <th>Restaurant</th>
                                                <th>Food Name</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Anna's Restaurant</td>
                                                <td>Pizza</td>
                                                <td>Php 150.00</td>
                                                <td><img class="img-fluid" src="../images/tab/1.jpg" alt="" width="50"></td>
                                                <td>	Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                                <td>
                                                    <span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														not available
													</span></td>
                                            </tr>
                                            <tr>
                                                <td>JCO Restaurant</td>
                                                <td>Hawaian Pizza</td>
                                                <td>Php 250.00</td>
                                                <td><img class="img-fluid" src="../images/tab/2.jpg" alt="" width="50"></td>
                                                <td>	Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                                <td>
                                                    <span class="badge light badge-success">
														<i class="fa fa-circle text-success mr-1"></i>
														available
													</span></td>
                                            </tr>
                                            <tr>
                                                <td>JM's Restaurant</td>
                                                <td>Pizza</td>
                                                <td>Php 180.00</td>
                                                <td><img class="img-fluid" src="../images/tab/4.jpg" alt="" width="50"></td>
                                                <td>	Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                                <td>
                                                    <span class="badge light badge-success">
														<i class="fa fa-circle text-success mr-1"></i>
														available
													</span></td>
                                            </tr>
                                            <tr>
                                                <td>J&C Restaurant</td>
                                                <td>Pasta</td>
                                                <td>Php 50.00</td>
                                                <td><img class="img-fluid" src="../images/tab/6.jpg" alt="" width="50"></td>
                                                <td>	Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                                <td>
                                                    <span class="badge light badge-success">
														<i class="fa fa-circle text-success mr-1"></i>
														available
													</span></td>
                                            </tr>
                                            <tr>
                                                <td>Kim's Restaurant</td>
                                                <td>Juice</td>
                                                <td>Php 50.00</td>
                                                <td><img class="img-fluid" src="../images/tab/7.jpg" alt="" width="50"></td>
                                                <td>	Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                                <td>
                                                    <span class="badge light badge-success">
														<i class="fa fa-circle text-success mr-1"></i>
														available
													</span></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Restaurant</th>
                                                <th>Food Name</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th>Status</th>
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