<?php
	include 'header.php';
	if (isset($_POST['submit']))
    {
        $Stnname=$_POST['stnname'];
        $Stncondition=$_POST['stncondition'];
        $Stnprice=$_POST['stnprice'];
        $Stndescription=$_POST['stndescription'];
        $StnClg = $_POST['stncollege'];
        $Stnimg=$_FILES['fl']['name'];
         $Added=date('d-M-Y');
        $q4="insert into tbl_stationarydetails values ('','$Stnname','$Stncondition','$Stnprice','$name','$Stnimg','$Stndescription','$StnClg ','$Added')";
        $c4=mysqli_query($con,$q4);
        if ($c4)
        {
            move_uploaded_file($_FILES['fl']['tmp_name'], "stnimg/".$Stnimg);
            ?>
            <script>
                alert("Stationery Added.");
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
                            <div class="card-body">
                                <h1 style="font-weight: bold;">Add Stationery</h1>
                            </div>
                            <hr>
                            <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Stationery Info</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Sationery Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" name="stnname" placeholder="Sationery Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Sationery Condition</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="stncondition" required>
                                                <option>Choose Stationery Condition</option>
                                                <option>Old</option>
                                                <option>New</option>
                                                <option>Rearly Used</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Sationery Price</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="email1" name="stnprice" placeholder="Sationery price" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label"> Sationery Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" placeholder=" Sationery Description" name="stndescription" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">College</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="stncollege" required>
                                            <option selected="selected">Choose College</option>
                                            <option>VGEC</option>
                                            <option>LD</option>
                                            <option>GEC,Gandhinagar.</option>
                                            <option>GEC,Palanpur.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Select Photo</label>
                                        <div class="col-sm-9">
                                            <div class="input-group mb-3">
                                                
                                                <div class="custom-file">
                                                    <input type="file" name="fl" class="custom-file-input" id="inputGroupFile01" required>
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="form-group mb-0 text-right">
                                        <button type="submit" name="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                                        <button type="reset" class="btn btn-dark waves-effect waves-light">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
	include 'footer.php';
?>