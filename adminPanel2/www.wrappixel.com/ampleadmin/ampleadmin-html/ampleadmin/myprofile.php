<?php
    include "header.php";

    $q6="select * from tbl_stationarydetails where stnadder='$name'";
    $c6=mysqli_query($con,$q6);
?>
<div class="page-wrapper">
            <div class="page-content container-fluid">
<div>

                <div class="page-content container-fluid"
                >
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img src="img/<?php echo $r['img'] ?>" class="rounded-circle" width="150" />
                                    <h4 class="card-title mt-2" style="text-transform: capitalize;"><?php echo $r['fname'] ?> <?php echo $r['lname'] ?></h4>
                                    <h6 class="card-subtitle"><?php echo $r['userrole'] ?></h6>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body">
                                <small class="text-muted">Email address </small>
                                <h6><?php echo $r['email'] ?></h6>
                                <small class="text-muted pt-4 db">Phone</small>
                                <h6><?php echo $r['phn'] ?></h6>
                                <small class="text-muted pt-4 db">Birthdate</small>
                                <h6><?php echo $r['bdate'] ?></h6>
                                <small class="text-muted pt-4 db">Gender</small>
                                <h6><?php echo $r['gender'] ?></h6>
                                <small class="text-muted pt-4 db">College</small>
                                <h6><?php echo $r['clg'] ?></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xlg-9 col-md-7">
                      <div class="tab-container">
                        <ul class="nav nav-tabs nav-tabs-classic" role="tablist">
                          <li class="nav-item"><a class="nav-link active show" href="#classic_home" data-toggle="tab" role="tab" aria-selected="false">Book</a></li>
                          <li class="nav-item"><a class="nav-link" href="#classic_profile" data-toggle="tab" role="tab" aria-selected="true">Stationery</a></li>
                          
                        </ul>
                        <div class="tab-content tabcontent-border mb-4 p-4">
                          <div class="tab-pane active show" id="classic_home" role="tabpanel">
                                <table class="table">
                                        <thead class="bg-success text-white">
                                            <tr>
                                                <th>No.</th>
                                                <th style="width: auto;">Name</th>
                                                <th>Author</th>
                                                <th>Condition</th>
                                                <th>Publication</th>
                                                <th>Department</th>
                                                <th>Semester</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <?php 
                                 while ($r1=mysqli_fetch_array($c1))
                                 {

                                 ?>
                                      <tbody>
                                            <tr>
                                                <td><?php echo $srnumber; ?></td>
                                                <td style="width: 20%;"><span class="user-img"> <img src="bookimg/<?php echo $r1['bookimg'] ?>"
                                                        alt="user" style="width: 40px;height: 40px" class="rounded-circle"> <span
                                                        class="profile-status online pull-right"></span> </span>&nbsp&nbsp
                                                    <?php echo $r1['bookname'] ?></td>
                                                <td><?php echo $r1['author'] ?></td>
                                                <td><?php echo $r1['bookcondition'] ?></td>
                                                <td><?php echo $r1['publication'] ?></td>
                                                <td><?php echo $r1['department'] ?></td>
                                                <td><?php echo $r1['sem'] ?></td>
                                                <td><?php echo $r1['description'] ?></td>
                                                <td><?php echo $r1['mrp'] ?></td>
                                                
                                            </tr>
                                        </tbody>
                                        <?php
                                        $srnumber=$srnumber + 1;
                                    }
                                    ?>
                                    </table>
                          </div>
                          <div class="tab-pane" id="classic_profile" role="tabpanel">
                            <table class="table">
                                        
                                        <thead class="bg-success text-white">
                                            
                                            <tr>
                                                <th>No.</th>
                                                <th>Stationery Name</th>
                                                <th>Stationery Condition</th>
                                                <th>Stationery Price</th>
                                                <th>Stationery Description</th>
                                                <th>Stationery College</th>
                                            </tr>
                                        </thead>
                                        <?php 
                                 while ($r6=mysqli_fetch_array($c6))
                                 {

                                 ?>
                                      <tbody>
                                            <tr>
                                                <td><?php echo $srnumber1; ?></td>
                                                <td>
                                                    <span class="user-img"> <img src="stnimg/<?php echo $r6['stnimg'] ?>"
                                                        alt="user" style="width: 40px;height: 40px" class="rounded-circle"> <span
                                                        class="profile-status online pull-right"></span> </span>&nbsp&nbsp
                                                    <?php echo $r6['stnname'] ?></td>
                                                <td><?php echo $r6['stncondition'] ?></td>
                                                <td><?php echo $r6['stnprice'] ?></td>
                                                <td><?php echo $r6['stndescription'] ?></td>
                                                <td><?php echo $r6['stnclg'] ?></td>
                                                
                                            </tr>
                                        </tbody>
                                        <?php
                                        $srnumber1=$srnumber1 + 1;
                                    }
                                    ?>
                                    </table>
                          </div>
                          <div class="tab-pane" id="classic_messages" role="tabpanel">
                            d
                          </div>
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
include "footer.php";
?>