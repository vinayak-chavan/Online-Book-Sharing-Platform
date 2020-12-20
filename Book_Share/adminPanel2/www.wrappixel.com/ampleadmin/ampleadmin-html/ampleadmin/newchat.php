<?php
 	$con=mysqli_connect("localhost","root","","bookshare_db");
	$snd=$_REQUEST['sender'];
	$rcvr=$_REQUEST['receiver'];
	$sndname=$_REQUEST['sname'];
	  $q01="select img from tbl_login where email='$snd'";
    $c01=mysqli_query($con,$q01);
    $r01=mysqli_fetch_array($c01);
    $q011="select img from tbl_login where email='$rcvr'";
    $c011=mysqli_query($con,$q011);
    $r011=mysqli_fetch_array($c011);
    $snimg=$r01['img'];
    $rvimg=$r011['img'];
    $rvname=$_REQUEST['rname'];
    $q0="select * from tbl_chatlist where sender='$snd' AND receiver='$rcvr'";
    $c0=mysqli_query($con,$q0);
    $q100="select * from tbl_chatlist where sender='$rcvr' AND receiver='$snd'";
    $c100=mysqli_query($con,$q100);
    $q007="SELECT chatid FROM tbl_chatlist ORDER BY chatid DESC LIMIT 1";
    $c007=mysqli_query($con,$q007);
    $r007=mysqli_fetch_array($c007);
    $idnumber=$r007['chatid'];
    $idnumber=$idnumber+1;
    $count1=mysqli_num_rows($c100);
    $count2=mysqli_num_rows($c0);
    if($count2==0 && $count2==0)
    {
	   $q="insert into tbl_chatlist values('','$snd','$rcvr','$snimg','$sndname','$idnumber')";
    $c=mysqli_query($con,$q);
    $q111="insert into tbl_chatlist values('','$rcvr','$snd','$rvimg','$rvname','$idnumber')";
    $c111=mysqli_query($con,$q111);
    }
   ?>
   <script>
   	window.location=("chat.php")
   </script>

   <?php




?>