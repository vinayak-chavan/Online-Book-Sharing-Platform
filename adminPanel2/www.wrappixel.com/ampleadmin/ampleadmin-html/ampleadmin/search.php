<?php
	include 'header.php';
	$flag=0;
	if (isset($_POST['search']))
	 {
	 	$semester=$_POST['sem'];
	 	$Department=$_POST['dept'];
	 	
	 		$q3="select * from tbl_bookdetails where sem='$semester' AND department='$Department'";		
	 		$c3=mysqli_query($con,$q3);
	 		$flag=1;
	 		if (mysqli_num_rows($c3)==0)
	 		{
	 			?>
	 				<script>
	 					window.location=("error.php");
	 				</script>
	 			<?php
	 		}
	 }
	 $q4="select * from tbl_bookdetails";		
	 $c4=mysqli_query($con,$q4);
     $q8="select * from tbl_stationarydetails";
     $c8=mysqli_query($con,$q8);
	 
?>
    
<div class="page-wrapper">             

    <div class="page-content container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                    
                      <div class="tab-container">
                        <ul class="nav nav-tabs nav-tabs-classic" role="tablist">
                          <li class="nav-item"><a class="nav-link active show" href="#classic_home" data-toggle="tab" role="tab" aria-selected="false">Book</a></li>
                          <li class="nav-item"><a class="nav-link" href="#classic_profile" data-toggle="tab" role="tab" aria-selected="true">Stationery</a></li>
                        </ul>
                        <div class="tab-content tabcontent-border mb-4 p-4">
                          <div class="tab-pane active show" id="classic_home" role="tabpanel">
                            


                            <form method="post" action="#">

    <div class="" style="background-color: white">
                <div class="row" style="background-color: white">
                    <pre>                                        </pre>
                        <div style="float: left;">
                        <h4 style="float: left;line-height: 36px">Department</h4>&nbsp
                        <select class="select2 form-control custom-select" name="dept" style="width: auto; height:36px;">
                                    <option>Choose Your Department</option>
                                                <option>IT</option>
                                                <option>CE</option>
                                                <option>Mechanical</option>
                                                <option>Electrical</option>
                                                <option>Civil</option>
                                </select>
                        </div>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<div style="float: left;">
                        <h4 style="float: left;line-height: 36px">Semester</h4>&nbsp
                        <select class="select2 form-control custom-select" name="sem" style="width: auto; height:36px;">
                                    <option>Choose Your Semester</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                </select>
                        </div>
                     
                        <pre>  </pre><input type="submit" name="search" class="btn btn-danger text-white float-right ml-3 d-none d-md-block" style="float: right;height: 36px" value="Search">
                    
                </div>
            </div>
    </form>
    <br style="background-color: #EDF1F5">

    <div class="page-content container-fluid" style="background-color: #EDF1F5">
        <div class="page-content container-fluid">
                <div class="row el-element-overlay">

                    <br>
        <div class="row">
                            <?php
                                if ($flag==1)
                                {
                                while ($r3=mysqli_fetch_array($c3))
                                {
                            ?>
                            
                            <div class="col-lg-3 col-md-6" style="margin: 20px">
                            <div class="card" style="width: 280px;height: 280px">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1" > <img src="bookimg/<?php echo $r3['bookimg'] ?>" style="width: 283px;height: 200px;background-size: cover;" alt="user" />
                                        <div class="el-overlay">
                                            <ul class="list-style-none el-info">
                                                
                                                <li class="el-item"><a class="btn default btn-outline el-link" href="bookview.php?book=<?php echo $r3['bookname'] ?>"><i class="icon-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="el-card-content">
                                        <h4 class="mb-0"><?php echo $r3['bookname'] ?></h4> <span class="text-muted"><?php echo $r3['mrp'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div><pre>        </pre>
                    

                            <!-- column -->
                            <!-- <div class="col-lg-3 col-md-6">
                                 
                                <div class="card">
                                    <img class="card-img-top img-responsive" style="width: 283px;height: 200px" src="bookimg/<?php echo $r3['bookimg'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $r3['bookname'] ?></h4>
                                        <p class="card-text"><?php echo $r3['description'] ?></p>
                                        <button type="button" class="btn btn-info"><i class="fas fa-rupee-sign"></i><?php echo $r3['mrp'] ?></button>
                                    </div>
                                </div>
                                
                            </div> -->
                            <?php
                                }
                            }
                            ?>
                            <?php
                            while ($r4=mysqli_fetch_array($c4))
                                {
                            ?>
                            
                            <div class="col-lg-3 col-md-6" style="margin: 20px">
                            <div class="card" style="width: 280px;height: 280px">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1"> <img src="bookimg/<?php echo $r4['bookimg'] ?>" style="width: 283px;height: 200px;background-size: cover;" alt="user" />
                                        <div class="el-overlay">
                                            <ul class="list-style-none el-info">
                                                
                                                <li class="el-item"><a class="btn default btn-outline el-link" href="bookview.php?book=<?php echo $r4['bookname'] ?>"><i class="icon-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="el-card-content">
                                        <h4 class="mb-0"><?php echo $r4['bookname'] ?></h4> <span class="text-muted"><?php echo $r4['mrp'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div><pre>        </pre>
                    

                            <!-- <div class="col-lg-3 col-md-6">
                            
                                <div class="card">
                                    <img class="card-img-top img-responsive" style="width: 283px;height: 200px" src="bookimg/<?php echo $r4['bookimg'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $r4['bookname'] ?></h4>
                                        <p class="card-text"><?php echo $r4['description'] ?></p>
                                        <button type="button" class="btn btn-info"><i class="fas fa-rupee-sign"></i><?php echo $r4['mrp'] ?></button>
                                    </div>
                                </div>
                            
                            </div> -->
                            <?php
                                }
                            
                            ?>
                            </div>
                </div>
                        </div>


    </div>





                          </div>

                          <div class="tab-pane" id="classic_profile" role="tabpanel">
                          
                           <div class="page-content container-fluid" style="background-color: #EDF1F5">
                          <br>  
                                <div class="page-content container-fluid">
                                        <div class="row el-element-overlay">

                                           <br>
                                <div class="row">
                                 
                                     <?php
                            while ($r8=mysqli_fetch_array($c8))
                                {
                            ?>
                                    <div class="col-lg-3 col-md-6" style="margin: 20px">
                                        <div class="card" style="width: 280px;height: 280px">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="stnimg/<?php echo $r8['stnimg'] ?>" style="width: 283px;height: 200px;background-size: cover;" alt="user" />
                                        <div class="el-overlay">
                                            <ul class="list-style-none el-info">
                                                
                                                <li class="el-item"><a class="btn default btn-outline el-link" href="stnview.php?stn=<?php echo $r8['stnname'] ?>"><i class="icon-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="el-card-content">
                                        <h4 class="mb-0"><?php echo $r8['stnname'] ?></h4> <span class="text-muted"><?php echo $r8['stnprice'] ?></span>
                                    </div>
                                </div>
                            </div>

                                </div>
                                <?php
                                    }
                                ?>
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