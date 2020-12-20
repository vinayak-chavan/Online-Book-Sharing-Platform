<?php
  include 'header.php';

  $sender=$_REQUEST['sender'];
  $recever=$_REQUEST['receiver'];
  $chat=$_REQUEST['Chatid'];
  $q0="select * from tbl_login where email='$sender'";
  $c0=mysqli_query($con,$q0);
  $r0=mysqli_fetch_array($c0);

  $q010="select * from tbl_login where email='$name'";
  $c010=mysqli_query($con,$q010);
  $r010=mysqli_fetch_array($c010);
  $q021="select * from tbl_chat where chatid='$chat'";
  $c021=mysqli_query($con,$q021);
  $q0211="SELECT * FROM tbl_chat where chatid='$chat' ORDER BY id DESC LIMIT 1";
  $c0211=mysqli_query($con,$q0211);
  $r0211=mysqli_fetch_array($c0211);
  $query1="UPDATE tbl_chat SET seen='read' where sender='$sender' AND receiver='$recever'";
  $c01=mysqli_query($con,$query1);


  if (isset($_POST['submit']))
  {
    $time=date("h:i a");
    $msg=$_POST['text'];
    $q11="insert into tbl_chat values ('','$name','$sender','$msg','$time','$chat','unread')";
    $c11=mysqli_query($con,$q11);
    ?>
    <script>
      window.location=("resent.php?sender=<?php echo $sender?>&receiver=<?php echo $recever ?>&Chatid=<?php echo $chat?>");
    </script>
    <?php
  }

?>
<div class="page-wrapper">

<div class="page-content container-fluid">

  <div style="height: 50%">
<!-- ============================================================== -->
                <!-- Chat App, Timeline & Chat Listing  -->
                <!-- ============================================================== -->
                <div class="row" >

<div class="col-md-12 col-lg-4" style="left: 4%;"  >
                    <div class="card" style="width:290%">
                      <h5 class="card-title text-uppercase p-3 bg-info text-white mb-0">
                        <a href="chat.php" ><i class="fas fa-arrow-left" ></i></a>&nbsp&nbsp&nbsp
                        Recent Chat
                        <a href="delete.php?sender=<?php echo $sender?>&receiver=<?php echo $recever ?>&Chatid=<?php echo $chat?>" style="float: right;"><button class="btn btn-success mr-2"><i class="fas fa-trash-alt"></i>&nbsp&nbspClear Chat</button></a> 
                      </h5>

                      <div class="card-body" >
                        <div class="chat-box scrollable" style="height: 335px;">
                          <!--chat Row -->
                          <ul class="chat-list">
                              <!--chat Row -->
                              <?php
                                while ($r021=mysqli_fetch_array($c021)) {
                                  if ($r021['sender']==$sender) {
                              ?>
                              <li class="chat-item">
                                  <div class="chat-img"><img src="img/<?php echo $r0['img'] ?>" alt="user"></div>
                                  <div class="chat-content">
                                      <div class="box bg-light-success">
                                        <h5 class="font-medium"><?php echo $r0['fname'] ?>&nbsp<?php echo $r0['lname'] ?></h5>
                                        <p class="font-light mb-0"><?php echo $r021['msg']; ?></p>
                                        <div class="chat-time"><?php echo $r021['time']; ?></div>

                                      </div>
                                  </div>
                              </li>
                              <?php
                                }
                                if ($r021['sender']==$recever)
                                {
                              ?>
                              <!--chat Row -->
                              <li class="odd chat-item">
                                  <div class="chat-content">
                                      <div class="box bg-light-success">
                                        <h5 class="font-medium"><?php echo $r010['fname'] ?>&nbsp<?php echo $r010['lname'] ?></h5>
                                        <p class="font-light mb-0"><?php echo $r021['msg']; ?></p>
                                        <div class="chat-time"><?php echo $r021['time']; ?></div>

                                      </div>
                                      <?php
                                          if ($r021['seen']=="read"){
                                            ?>
                                            <img src="img/double.png" style="width: 15px;height: 15px">
                                            <?php
                                          }
                                          else
                                          {
                                            ?>
                                            <img src="img/single.png" style="width: 15px;height: 15px">
                                            <?php
                                          }
                                        ?>
                                  </div>
                                  
                                  <div class="chat-img"><img src="img/<?php echo $r010['img'] ?>" alt="user"></div>
                                
                              </li>
                              
                              <!--chat Row -->
                              <?php
                                  }
                                }
                              ?>
                              
                          </ul>
                        </div>
                      </div>
                      <form action="#" method="post">
                      <div class="card-body border-top">
                        <div class="row">
                            <div class="col-9">
                                <div class="input-field mt-0 mb-0">
                                    <textarea id="textarea1" name="text" placeholder="Type message" class="form-control border-0" required></textarea>
                                </div>
                            </div>
                            <div class="col-3">
                                <button type="submit" name="submit" class="btn btn-info waves-effect waves-light" style="width: 60px; height: 60px; border-radius: 50%;"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </div>
                      </div>
                      </form>
                    </div>
                  
              </div>
              </div>
            </div>
        </div>
        </div>
        

  <?php
    include 'footer.php';
  ?>