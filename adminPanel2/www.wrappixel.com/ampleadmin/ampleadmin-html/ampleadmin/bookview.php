<?php
	include 'header.php';
	$Bookname=$_REQUEST['book'];
	$q5="select * from tbl_bookdetails where bookname='$Bookname'";
	$c5=mysqli_query($con,$q5);
	$r5=mysqli_fetch_array($c5);
    $forname=$r5['postadder'];
    $q00="select * from tbl_login where email='$forname'";
    $c00=mysqli_query($con,$q00);
    $r00=mysqli_fetch_array($c00);
    $q001="select * from tbl_login where email='$name'";
    $c001=mysqli_query($con,$q001);
    $r001=mysqli_fetch_array($c001);
?>
	<div class="page-wrapper">            
	<div class="page-content container-fluid">
		<div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
		<div class="card-body">
                                <h1><?php echo $r5['bookname'] ?></h1><hr>
                                <h6 class="card-subtitle"></h6>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="white-box text-center"> <img src="bookimg/<?php echo $r5['bookimg'] ?>" style="width: 285px;height: 355px" class="img-responsive"> </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-6">
                                        <h4 class="box-title mt-5">Book description</h4>
                                        <p><?php echo $r5['description'] ?></p>
                                        <h2 class="mt-5"><i class="fas fa-rupee-sign"></i>&nbsp<?php echo $r5['mrp'] ?></h2>
                                        <a href="newchat.php?sender=<?php echo $r5['postadder']  ?>&receiver=<?php echo $name  ?>&sname=<?php echo $r00['fname']?> <?php echo $r00['lname']?>&rname=<?php echo $r001['fname']?> <?php echo $r001['lname']?>" class="btn btn-primary btn-rounded"><i class="far fa-comments"></i>&nbsp Chat Now </a>
                                        <a href="adddeal.php?book=<?php echo $Bookname ?>&sender=<?php echo $r5['postadder']  ?>&receiver=<?php echo $name  ?>" class="btn btn-primary btn-rounded">Get this book</a>
                                        <a href="adddealrent.php?book=<?php echo $Bookname ?>&sender=<?php echo $r5['postadder']  ?>&receiver=<?php echo $name  ?>" class="btn btn-primary btn-rounded">Get this book on rent</a>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <h3 class="box-title mt-5">General Info</h3>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td width="390">Book Name</td>
                                                        <td><?php echo $r5['bookname'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Author</td>
                                                        <td><?php echo $r5['author'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Publication</td>
                                                        <td><?php echo $r5['publication'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Post Adder</td>
                                                        <td><?php echo $r5['postadder'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Department</td>
                                                        <td><?php echo $r5['department'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Semester</td>
                                                        <td><?php echo $r5['sem'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Book Condition</td>
                                                        <td><?php echo $r5['bookcondition'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>College</td>
                                                        <td><?php echo $r5['clg'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Added On</td>
                                                        <td><?php echo $r5['addon'] ?></td>
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