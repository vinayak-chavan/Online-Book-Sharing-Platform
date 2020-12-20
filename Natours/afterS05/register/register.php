
<?php

$conn = mysqli_connect("localhost", "root", "", "bookshare_db");
    if (isset($_POST['submit']))
    {
        $Fname=$_POST['fname'];
        $Lname=$_POST['lname'];
        $Email=$_POST['email'];
        $Password=$_POST['password'];
        $Cpassword=$_POST['cpassword'];
        $Gender=$_POST['gender'];
        $Userrole = $_POST['userrole'];
        $Clg = $_POST['clg'];
        $img=$_FILES['fl']['name'];
        //$img=$_FILES['fl']['name'];
        $Bdate=$_POST['bdate'];
        $Phnumber=$_POST['phnumber'];
        $status="offline";
        $q1="select * from tbl_login where email='$Email' AND phn='$Phnumber'";
        $c1=mysqli_query($conn,$q1);
        $r1=mysqli_num_rows($c1);
        if ($r1>0)
        {
        	?>
        	<script>
        		alert("Email already exist.");
        		window.location=("register.php");
        	</script>
        	<?php
        }
        else
        {
        if ($Password == $Cpassword)
        {
        
        $q="insert into tbl_login values ('','$Fname','$Lname','$Bdate','$Gender','$Email','$Userrole','$Password','$img','$Clg','$status','$Phnumber')";
        $c=mysqli_query($conn,$q);
        if ($c)
        {
            move_uploaded_file($_FILES['fl']['tmp_name'], "../../../adminPanel2/www.wrappixel.com/ampleadmin/ampleadmin-html/ampleadmin/img/".$img);
            ?>
            <script>
                alert("User added successfully.");
                window.location=("../Loginv3/login.php");
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
    }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="container-login100" style="background-image: url('bg-01.jpg');">
        <div class="wrapper wrapper--w680" >
            <div class="card card-4">
                <div class="card-body" style="background:  linear-gradient(to right bottom, #7ed56f 0%, #28b485 100%);">
                    <h2 class="title">Registration Form</h2>

                    <!-- <div class="container-login100-form-btn">
    
                                
                            <button class="login100-form-btn" style="  margin-right:180px; margin-bottom: 10px;" onclick="emailbtn()">Email</button>
                            <button class="login100-form-btn" style="margin-bottom: 10px;" onclick="phnbtn()">Phone Number</button> 


                            
                    </div> 
 -->
                    <form method="POST" action="#" enctype="multipart/form-data">
                        

                        <div class="row row-space">
                            <div class="col-2 wrapinput100 validate-input">
                                <div class="input-group">
                                    <label class="label" data-validate = "Enter First Name">first name</label>
                                    <input class="input--style-4" type="text" name="fname" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group"data-validate = "Enter Lastname">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="lname" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group"data-validate = "Enter Birthday">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="date" name="bdate" style=" height: 50px " required>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group" data-validate = "Select Gender">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value="Male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group" data-validate = "Enter Email">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" id="mailid" name="email" >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group"data-validate = "Enter PhoneNumber">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" id="phn" name="phnumber" pattern="[1-9]{1}[0-9]{9}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group" data-validate = "Enter Role">
                            <label class="label">College</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="clg" required>
                                    <option disabled="disabled" selected="selected">Choose College</option>
                                    <option>VGEC</option>
                                    <option>LD</option>
                                    <option>GEC,Gandhinagar.</option>
                                    <option>GEC,Palanpur.</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group" data-validate = "Enter Role">
                            <label class="label">Role</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="userrole" required>
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Junior</option>
                                    <option>Senior</option>
                                    <option>Faculties</option>
                                    <option>Allumanies</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                          <div class="input-group">
                            <label class="label">Choose Profle Photo</label>
                            <input name="fl" class="input--style-4" style="box-sizing: border-box;padding-top: 10px" type="file" name="image">
                          </div>

                      

                        <div class="input-group" style="width: 265px;" data-validate = "Enter Password">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="Password" name="password" minlength="8" required>
                        </div>

                        <div class="input-group" style="width: 265px;" data-validate = "Enter Confirm_Password">
                                    <label class="label">Confirm Password</label>
                                    <input class="input--style-4" type="Password" name="cpassword" minlength="8" required>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit" name="submit">Submit</button>
                        
                            <button class="login100-form-btn" style="margin-left: 50px;"><a href="../home.php">Home</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->