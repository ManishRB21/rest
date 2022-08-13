<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php include 'includes/header.php'?>
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
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-3 align-items-start">
					<div class="mr-auto d-none d-lg-block">
						<h2 class="text-black font-w600 mb-0"><i class="mdi mdi-view-dashboard"></i> Dashboard</h2>
					</div>
				</div>
                <div class="row">
					<div class="col-xl-6 col-xxl-6 col-lg-6 col-md-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-primary text-primary">
									<i class="mdi mdi-truck-delivery"></i>
									</span>
									<div class="media-body">
										<h3 class="mb-0 text-black"><span class="counter ml-0">56</span></h3>
										<p class="mb-0">Number of Delivery</p>
										<small>4% (30 days)</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxl-6 col-lg-6 col-md-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-primary text-primary">
									<i class="mdi mdi-chart-timeline"></i>
                                </span>
									<div class="media-body">
										<h3 class="mb-0 text-black"><span class="counter ml-0">126</span>k</h3>
										<p class="mb-0">Total Commissions</p>
										<small>4% (30 days)</small>
									</div>
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