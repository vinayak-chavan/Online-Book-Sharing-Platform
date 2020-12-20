<?php
	include 'header.php';
	$Stnname=$_REQUEST['stn'];
	$q5="select * from tbl_stationarydetails where stnname='$Stnname'";
	$c5=mysqli_query($con,$q5);
	$r5=mysqli_fetch_array($c5);
?>
	<div class="page-wrapper">            
	<div class="page-content container-fluid">
		<div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
		<div class="card-body">
                                <h1><?php echo $r5['stnname'] ?></h1><hr>
                                <h6 class="card-subtitle"></h6>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="white-box text-center"> <img src="stnimg/<?php echo $r5['stnimg'] ?>" style="width: 285px;height: 355px" class="img-responsive"> </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-6">
                                        <h4 class="box-title mt-5">Stationery description</h4>
                                        <p><?php echo $r5['stndescription'] ?></p>
                                        <h2 class="mt-5"><i class="fas fa-rupee-sign"></i>&nbsp<?php echo $r5['stnprice'] ?></h2>
                                        <button class="btn btn-primary btn-rounded"><i class="far fa-comments"></i>&nbsp Chat Now </button>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <h3 class="box-title mt-5">General Info</h3>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td width="390">Sationery Name</td>
                                                        <td><?php echo $r5['stnname'] ?></td>
                                                    </tr>
                                                     <tr>
                                                        <td>Stationery Condition</td>
                                                        <td><?php echo $r5['stncondition'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Post Adder</td>
                                                        <td><?php echo $r5['stnadder'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>College</td>
                                                        <td><?php echo $r5['stnclg'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Added On</td>
                                                        <td><?php echo $r5['stnaddon'] ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
	</div>
	</div>
<?php
	include 'footer.php';
?>