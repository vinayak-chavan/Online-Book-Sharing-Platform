<?php
	include 'header.php';

if (isset($_POST['submit']))
    {
        $Cname=$_POST['cname'];
        $Cbname=$_POST['cbname'];
        $Cmessage=$_POST['cmessage'];
        $q7="insert into tbl_contact values ('','$Cname','$Cbname','$Cmessage')";
        $c7=mysqli_query($con,$q7);
        if ($c7)
        {

            ?>
            <script>
                alert("Feadback submited");
                window.location=("#");
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
            	 <div class="card" style="width: 70%;margin-left: auto;margin-right: auto;">
                            <div class="card-body collapse show">
                                <h4 class="card-title">Feadback</h4>
                                 
                       			 <div class="card">
                           			 <div class="card-body">
                               		 <h4 class="card-title">Name</h4>
                                	 <form class="mt-3" method="post" action="#">
                                   	 <div class="form-group">
                                        <input type="text" name="cname" class="form-control" id="nametext" aria-describedby="name" placeholder="Name"> 
                                    </div>
                                     <h4 class="card-title"> Book Name</h4>
                                     <div class="form-group">
                                        <input type="text" name="cbname" class="form-control" id="nametext" aria-describedby="name" placeholder=" Book Name">
                                    </div>
                                    	 <h4 class="card-title"> Message</h4>
                                     <div class="form-group">
                                        <textarea class="form-control" name="cmessage" id="nametext" aria-describedby="name" placeholder="Message"></textarea>
                                    </div>
                                 		
                                    <input  type="submit" name="submit"  value="submit" class="btn btn-rounded btn-block btn-success">
                                 		

                                    </form>
                                
                            </div>
                    </div>
                </div>
            </div>
<?php
	include 'footer.php';
?>