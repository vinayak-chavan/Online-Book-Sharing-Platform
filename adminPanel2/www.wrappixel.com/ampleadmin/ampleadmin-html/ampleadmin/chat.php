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
                <div class="row"  >
                	
                  <div class="col-md-12 col-lg-4" style="margin-left: auto; margin-right: auto;">
                    <div class="card" > 
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
                          	
                            <a href="resent.php?sender=<?php echo $r0['sender']?>&receiver=<?php echo $name?>&Chatid=<?php echo $r0['chatid']?>">
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
                            </a>
                            
                          </li>
                        </ul>
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