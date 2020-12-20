<?php
	include 'header.php';
  $q0="select * from tbl_chatlist where receiver='$name'";
  $c0=mysqli_query($con,$q0);
 
?>
<div class="page-wrapper">

<div class="page-content container-fluid">

	<div style="height: 50%">
<!-- ============================================================== -->
                <!-- Chat App, Timeline & Chat Listing  -->
                <!-- ============================================================== -->
                <div class="row" >
                	
                  <div class="col-md-12 col-lg-4">
                    <div class="card"> 
                      <h5 class="card-title text-uppercase p-3 bg-info text-white mb-0" style="float: left;">
                        Chat Listing
                        <button onClick="window.location.reload();" style="background: transparent; border: 0px; float: right;"><i class="fas fa-redo-alt"></i></button>
                      </h5>
                      

                      <div class="chat-box scrollable" style="height:455px;">
                        <?php
                       while($r0=mysqli_fetch_array($c0))
                       {
                        $senderemail=$r0['sender'];
                        $q001="select * from tbl_login where email='$senderemail'";
                        $c001=mysqli_query($con,$q001);
                        $r001=mysqli_fetch_array($c001);
                        $statususer=$r001['status'];
                        ?>

                      <div class="p-3">
                        <ul class="list-style-none chat-list">
                          <li class="mb-3">
                            <button id="myBtn">
                              <div class="d-flex align-items-center">
                                <img src="img/<?php echo $r0['img'] ?>" class="rounded-circle" width="40">
                                <div class="ml-3">
                                  <h5 class="mb-0 text-dark"><?php echo $r0['sname']?></h5>
                                  <?php
                                    if($statususer=='Offline')
                                    {
                                  ?>
                                  <small style="color: red">Offline</small>
                                  <?php
                                    }
                                    else
                                    {
                                  ?>
                                   <small class="text-success">Online</small>
                                  <?php
                                    }
                                  ?>
                                </div>
                              </div>
                            </button>
                          </li>
                        </ul>
                      </div>
                      <?php
                    }
                    ?>
                    </div>
                </div>
                  </div>
              
                  <div class="col-md-12 col-lg-4">
                    <div class="card" style="width: 210%">
                      <h5 class="card-title text-uppercase p-3 bg-info text-white mb-0">
                        Recent Chat
                      </h5>
                      <div class="card-body" >
                        <div class="chat-box scrollable" style="height:300px;">
                          <!--chat Row -->
                          <ul class="chat-list">
                              <!--chat Row -->
                              <li class="chat-item">
                                  <div class="chat-img"><img src="../../assets/images/users/1.jpg" alt="user"></div>
                                  <div class="chat-content">
                                      <div class="box bg-light-success">
                                        <h5 class="font-medium">Sonu Nigam</h5>
                                        <p class="font-light mb-0">Hi, All!</p>
                                        <div class="chat-time">10.56 am</div>
                                      </div>
                                  </div>
                              </li>
                              <!--chat Row -->
                              <li class="odd chat-item">
                                  <div class="chat-content">
                                      <div class="box bg-light-success">
                                        <h5 class="font-medium">Genelia</h5>
                                        <p class="font-light mb-0">Hi, How are you Sonu? ur next concert?</p>
                                        <div class="chat-time">11.00 am</div>
                                      </div>
                                  </div>
                                  <div class="chat-img"><img src="../../assets/images/users/2.jpg" alt="user"></div>
                              </li>
                              <!--chat Row -->

                          </ul>
                        </div>
                      </div>
                      <div class="card-body border-top">
                        <div class="row">
                            <div class="col-9">
                                <div class="input-field mt-0 mb-0">
                                    <textarea id="textarea1" placeholder="Type and enter" class="form-control border-0"></textarea>
                                </div>
                            </div>
                            <div class="col-3">
                                <a class="btn-circle btn-lg btn-success float-right text-white" href="javascript:void(0)"><i class="fas fa-paper-plane"></i></a>
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
	include 'footer.php';
?>