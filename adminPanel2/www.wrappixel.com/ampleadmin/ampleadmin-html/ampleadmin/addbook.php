<?php
	include 'header.php';
	if (isset($_POST['submit']))
    {
        $Bname=$_POST['bname'];
        $Author=$_POST['author'];
        $Publication=$_POST['publication'];
        $Description=$_POST['description'];
        $Price=$_POST['price'];
        $Condition=$_POST['condition'];
        $Department= $_POST['department'];
        $Clg = $_POST['college'];
        $img=$_FILES['fl']['name'];
        $Semester=$_POST['sem'];
        $Added=date('d-M-Y');
        $q4="insert into tbl_bookdetails values ('','$Bname','$Author','$Condition','$Publication','$Department','$Semester','$Description','$Price','$img','$name','$Clg','$Added')";
        $c4=mysqli_query($con,$q4);
        if ($c4)
        {
            move_uploaded_file($_FILES['fl']['tmp_name'], "bookimg/".$img);
            ?>
            <script>
                alert("Book Added.");
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
                                <h1 style="font-weight: bold;">Add Book</h1>
                            </div>
                            <hr>
                            <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Book Info</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Book Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" name="bname" placeholder="Book Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Author</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" name="author" placeholder="Author" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Publication</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="email1" name="publication" placeholder="Publication" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" placeholder="Description" name="description" required></textarea>
                                        </div>
                                    </div>
                                
                                    
                                    <div class="form-group row">
                                        <label for="com1" class="col-sm-3 text-right control-label col-form-label">M.R.P.</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="com1" name="price" placeholder="M.R.P." required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Book Condition</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="condition" required>
                                                <option>Choose Book Condition</option>
                                                <option>Old</option>
                                                <option>New</option>
                                                <option>Rearly Used</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Semester</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="sem" required>
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
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Department</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="department" required>
                                                <option>Choose Your Department</option>
                                                <option>IT</option>
                                                <option>CE</option>
                                                <option>Mechanical</option>
                                                <option>Electrical</option>
                                                <option>Civil</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">College</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="college" required>
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