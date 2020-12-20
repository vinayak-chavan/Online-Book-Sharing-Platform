<?php
    include "header.php";

    if (isset($_POST['submit'])) {
        $Fname=$_POST['first'];
        $Lname=$_POST['last'];
        $Gender=$_POST['gender'];
        $Userrole = $_POST['role'];
        $Clg = $_POST['college'];
        $img=$_FILES['fl']['name'];
        //$img=$_FILES['fl']['name'];
        $Bdate=$_POST['birth'];
        $Phnumber=$_POST['number'];
        
        $q3="UPDATE tbl_login SET fname = '$Fname',lname = '$Lname',bdate = '$Bdate',gender = '$Gender',phn = '$Phnumber',userrole = '$Userrole',img = '$img',clg = '$Clg' WHERE email = '$name'";
        $c3=mysqli_query($con,$q3);
        if ($c3)
        {
            move_uploaded_file($_FILES['fl']['tmp_name'], "img/".$img);
            ?>
            <script>
                alert("Profile Updated.");
                window.location=("myprofile.php");
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert("Something went wrong.");
            </script>
            <?php
        }    
    }
?>
<div class="page-wrapper">

<div class="page-content container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="width: 70%;margin-left: auto;margin-right: auto;">
                    <!-- Column -->
                    
                      
                            <div class="card-body">
                                <center class="mt-4"> <img src="img/<?php echo $r['img'] ?>" class="rounded-circle" width="150" />
                                    <h4 class="card-title mt-2" style="text-transform: uppercase;"><?php echo $r['fname'] ?></h4>
                                    <h6 class="card-subtitle"><?php echo $r['userrole'] ?></h6>
                                </center>
                            </div>
                            <form action="#" method="post" enctype="multipart/form-data">
                            <div class="card-body"> 
                                <div class="card-body">
                                    <div class="form-group">
                                        <small class="text-muted">Email address </small>
                                        <input type="text" class="form-control" value="<?php echo $r['email'] ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <small class="text-muted">First Name </small>
                                        <input type="text" class="form-control" name="first" value="<?php echo $r['fname'] ?>" >
                                    </div>
                                    <div class="form-group">
                                        <small class="text-muted">Last Name </small>
                                        <input type="text" class="form-control" name="last" value="<?php echo $r['lname'] ?>" >
                                    </div>
                                    <div class="form-group">
                                        <small class="text-muted">Birthdate </small>
                                        <input type="date" class="form-control" name="birth" value="<?php echo $r['bdate'] ?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <small class="text-muted">Gender </small></br>
                                        <input type="radio" value="Male" name="gender">
                                        <label>Male</label>
                                    
                                        <input type="radio" value="Female" name="gender">
                                        <label>Female</label>
                                    
                                </div>
                                    
                                    <div class="form-group">
                                        <small class="text-muted">Phone Number </small>
                                        <input type="tel" class="form-control" name="number" value="<?php echo $r['phn'] ?>" >
                                    </div>
                                    <div class="form-group">
                                        <small class="text-muted">Userrole </small>
                                        <select class="custom-select mr-sm-2" name="role" id="inlineFormCustomSelect">
                                            <option selected>Choose Userrole</option>
                                            <option>Junior</option>
                                            <option>Senior</option>
                                            <option>Faculties</option>
                                            <option>Allumanies</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <small class="text-muted">College </small>
                                        <select class="custom-select mr-sm-2" name="college" id="inlineFormCustomSelect">
                                            <option selected="selected">Choose College</option>
                                            <option>VGEC</option>
                                            <option>LD</option>
                                            <option>GEC,Gandhinagar.</option>
                                            <option>GEC,Palanpur.</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <small class="text-muted">Profile Photo</small>
                                            <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="fl" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                    </div>

                                    <center>
                                    <div class="button-group">
                                    <button type="submit" name="submit" class="btn waves-effect waves-light btn-outline-success">Save</button>
                                    </div>
                                    </center>
                                    </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

<?php 
include "footer.php";
?>