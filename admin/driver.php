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
                            <h4><i class="mdi mdi-truck-delivery"></i> Delivery Driver</h4>
                        </div>
                        <a href="javascript:void(0);" class="btn fs-22 py-1 btn-success">Add Driver</a>
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
                                                <th>Profile</th>
                                                <th>Full Name</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>License</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td><img class="img-fluid" src="../images/avatar/1.jpg" alt="" width="50"></td>
                                                <td>Kyle Bowman</td>
                                                <td>765 st. Rosario, Taguig</td>
                                                <td>kyle@gmail.com</td>
                                                <td>066-1288828209-21</td>
                                                <td>
                                                    <span class="badge light badge-success">
														<i class="fa fa-circle text-success mr-1"></i>
														active
													</span></td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="mdi mdi-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="mdi mdi-eraser"></i></a>
													</div>												
												</td>
                                            </tr>
                                            <tr><td><img class="img-fluid" src="../images/avatar/8.jpg" alt="" width="50"></td>
                                                <td>Dutca Patrick</td>
                                                <td>234 st. Jennys, Makati</td>
                                                <td>dutca@gmail.com</td>
                                                <td>066-1288828209-21</td>
                                                <td>
                                                    <span class="badge light badge-success">
														<i class="fa fa-circle text-success mr-1"></i>
														active
													</span></td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="mdi mdi-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="mdi mdi-eraser"></i></a>
													</div>												
												</td>
                                            </tr>
                                            <tr><td><img class="img-fluid" src="../images/avatar/1.jpg" alt="" width="50"></td>
                                                <td>Joshua Guzman</td>
                                                <td>345 st. De Castro, Quezon</td>
                                                <td>joshua@gmail.com</td>
                                                <td>066-1288828209-21</td>
                                                <td>
                                                    <span class="badge light badge-success">
														<i class="fa fa-circle text-success mr-1"></i>
														active
													</span></td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="mdi mdi-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="mdi mdi-eraser"></i></a>
													</div>												
												</td>
                                            </tr>
                                            <tr><td><img class="img-fluid" src="../images/avatar/2.jpg" alt="" width="50"></td>
                                                <td>Terry Baker</td>
                                                <td>123 st. Manggahan, Pasig</td>
                                                <td>terry@gmail.com</td>
                                                <td>066-1288828209-21</td>
                                                <td>
                                                    <span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														inactive
													</span></td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="mdi mdi-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="mdi mdi-eraser"></i></a>
													</div>												
												</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Profile</th>
                                                <th>Full Name</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>License</th>
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