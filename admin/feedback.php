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
                            <h4><i class="mdi mdi-comment-text-multiple-outline"></i> Feedback & Reports</h4>
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
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Date</th>
                                                <th>Submitted By</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Feedback 1</td>
                                                <td>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                                <td>Nov 30, 2021</td>
                                                <td>Mike Tan</td>
                                                <td>
                                                    <span class="badge light badge-info">
														<i class="fa fa-circle text-info mr-1"></i>
														open
													</span></td>
                                                <td>
                                                    <select class="form-control">
                                                        <option>closed</option>
                                                        <option>open</option>
                                                        <option>solved</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Feedback 2</td>
                                                <td>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                                <td>Nov 28, 2021</td>
                                                <td>Dutca Patrick</td>
                                                <td>
                                                    <span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														solved
													</span></td>
                                                <td>
                                                    <select class="form-control">
                                                        <option>closed</option>
                                                        <option>open</option>
                                                        <option>solved</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Feedback 3</td>
                                                <td>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                                <td>Nov 29, 2021</td>
                                                <td>Joshua Guzman</td>
                                                <td>
                                                    <span class="badge light badge-success">
														<i class="fa fa-circle text-success mr-1"></i>
														closed
													</span></td>
                                                <td>
                                                    <select class="form-control">
                                                        <option>closed</option>
                                                        <option>open</option>
                                                        <option>solved</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Date</th>
                                                <th>Submitted By</th>
                                                <th>Status</th>
                                                <th>Action</th>
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