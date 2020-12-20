
<?php

include "header.php";

?>

        <div style="margin-top: 60px;margin-left: 65px">
                <center>

                <div class="card-group" >
                    <div class="card p-2 p-lg-3" style="background-color: #DEDEDE">
                        <div class="p-lg-3 p-2">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-circle btn-danger text-white btn-lg" href="javascript:void(0)">
                                <i class="fas fa-book"></i>
                            </button>
                                <div class="ml-4" style="width: 38%;">
                                    <h4 class="font-light">Books</h4>
                                    
                                </div>
                                <div class="ml-auto">
                                    <h2 class="display-7 mb-0"><?php echo $num ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-2 p-lg-3" style="background-color: #DEDEDE">
                        <div class="p-lg-3 p-2">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-circle btn-cyan text-white btn-lg" href="javascript:void(0)">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                                <div class="ml-4" style="width: 38%;">
                                    <h4 class="font-light">Stationary</h4>
                    
                                </div>
                                <div class="ml-auto">
                                    <h2 class="display-7 mb-0"><?php echo $num1 ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-2 p-lg-3" style="background-color: #DEDEDE">
                        <div class="p-lg-3 p-2">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-circle btn-warning text-white btn-lg" href="javascript:void(0)">
                                <i class="fas fa-plus-circle"></i>
                            </button>
                                <div class="ml-4" style="width: 38%;">
                                    <h4 class="font-light">Total Item</h4>
                                    
                                </div>
                                <div class="ml-auto">
                                    <h2 class="display-7 mb-0"><?php echo $num+$num1 ?></h2>
                                </div>
                            </div>
	                        </div>
                        </center>

                        <div style="height: 450px">
                        <div class="ml-4" style="width: 38%;float: left;height: 300px">
                            <h2 class="font-light" style="font-weight: bolder; text-transform: uppercase; text-align: center; color: green">Digital Plateform For Book Sharing</h2>
                            <div >
                        		<p style="width: 100%; font-size: 18px;word-spacing: 2px; letter-spacing: 0.1px" align="justify">
                            With this platform unused printed materials and stationary can be passed on to the upcoming students who come from weaker economic background. It also creates a nature of donation student's heart and a wide community of students can come closer to each other through this platform. 
                        </p>
                        <p style="font-size: 18px; word-spacing: 2px; letter-spacing: 0.1px" class="paragraph" align="justify">
                            This digital platform will able to reduce the communication gap between senior students and junior students.Proper distribution of old resources will be happen.
                        </p>
                        
      					
                    </div>
              			
                        </div>

                        <div style="margin-left: 550px;height: 100vh;background: cover">
                        	<marquee scrollamount="15">
                        		<img src="img/nat-1-large.jpg" style="height: 450px; border-radius: 10px">
                        		<img src="img/nat-2-large.jpg" style="height: 450px; border-radius: 10px">
                        		<img src="img/nat-3-large.jpg" style="height: 450px; border-radius: 10px">
                        	</marquee>	

                        </div>
                    </div>
                </div>


                

<?php

include "footer.php";

?>