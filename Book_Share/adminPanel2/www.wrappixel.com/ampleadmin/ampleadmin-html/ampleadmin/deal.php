<?php
	include 'header.php';
	$q5="select * from tbl_deal where sender='$name'";
	$c5=mysqli_query($con,$q5);
	
	$q55="select * from tbl_deal where receiver='$name'";
	$c55=mysqli_query($con,$q55);
	$srnumber2=1;
?>
	<div class="page-wrapper">            
	<div class="page-content container-fluid">
	<div class="row">
		<div class="col-lg-8 col-xlg-9 col-md-7" >
                      <div class="tab-container" style="width: 150%">
                        <ul class="nav nav-tabs nav-tabs-classic" role="tablist">
                          <li class="nav-item"><a class="nav-link active show" href="#classic_home" data-toggle="tab" role="tab" aria-selected="false">Sent</a></li>
                          <li class="nav-item"><a class="nav-link" href="#classic_profile" data-toggle="tab" role="tab" aria-selected="true">Receive</a></li>
                          
                        </ul>
                        <div class="tab-content tabcontent-border mb-4 p-4">
                          <div class="tab-pane active show" id="classic_home" role="tabpanel">
                                    <table class="table">
                                        <thead class="bg-success text-white">
                                            <tr>
                                                <th>Id</th>
                                                <th>Book Name</th>
                                                <th>Book Image</th>
                                                <th>Sender Name</th>
                                                <th>Receiver Name</th>
                                                <th>Price</th>
                                                <th>Description</th>
                                                <th>Return Book</th>
                                                <th>Return Date</th>
                                            </tr>
                                        </thead>
                                        <?php 
                                 while ($r5=mysqli_fetch_array($c5))
                                 {

                                 ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $srnumber2; ?></td>
                                                <td><?php echo $r5['book'] ?></td>
                                                <td><img src="bookimg/<?php echo $r5['img'] ?>" style="width: 30px;height: 30px"></td>
                                                <td><?php echo $r5['sender'] ?></td>
                                                <td><?php echo $r5['receiver'] ?></td>
                                                <td><?php echo $r5['price'] ?></td>
                                                <td><?php echo $r5['description'] ?></td>
                                                <td><?php echo $r5['returnbook'] ?></td>
                                                <td><?php echo $r5['rdate'] ?></td>
                                                
                                                
                                            </tr>
                                        </tbody>
                                        <?php
                                        $srnumber2=$srnumber2 + 1;
                                    }
                                    ?>
                                    </table>
                           </div>
                          <div class="tab-pane" id="classic_profile" role="tabpanel">
                          	<table class="table">
                                        <thead class="bg-success text-white">
                                            <tr>
                                                <th>Id</th>
                                                <th>Book Name</th>
                                                <th>Book Image</th>
                                                <th>Sender Name</th>
                                                <th>Receiver Name</th>
                                                <th>Price</th>
                                                <th>Description</th>
                                                <th>Return Book</th>
                                                <th>Return Date</th>
                                            </tr>
                                        </thead>
                                        <?php 
                                 while ($r55=mysqli_fetch_array($c55))
                                 {

                                 ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $srnumber1; ?></td>
                                                <td><?php echo $r55['book'] ?></td>
                                                <td><img src="bookimg/<?php echo $r55['img'] ?>" style="width: 30px;height: 30px"></td>
                                                <td><?php echo $r55['sender'] ?></td>
                                                <td><?php echo $r55['receiver'] ?></td>
                                                <td><?php echo $r55['price'] ?></td>
                                                <td><?php echo $r55['description'] ?></td>
                                                <td><?php echo $r55['returnbook'] ?></td>
                                                <td><?php echo $r55['rdate'] ?></td>
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
<?php
	include 'footer.php';
?>