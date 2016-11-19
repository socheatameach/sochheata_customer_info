<?php
include('dbcon.php');

if (isset($_POST['submit'])){
	echo "<pre>";
	var_dump($_POST);die();
	echo "</pre>";
	
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$sex=$_POST['sex'];
$nationality=$_POST["nationality"];
$position=$_POST["position"];
$email=$_POST["email"];
$phone=$_POST['phone'];
$address=$_POST["address"];
$codebanner=$_POST["codebanner"];
$date=$_POST["date"];
$buy=$_POST['chk_buy'];
$sale=$_POST['chk_sale'];
$rent=$_POST['chk_rent'];
$budget=$_POST['budget'];
$apartment=$_POST["chk_apartment"];
$building=$_POST["chk_building"];
$business=$_POST["chk_business"];
$condo=$_POST["chk_condo"];
$factory=$_POST["chk_factory"];
$hotel=$_POST["chk_hotel"];
$land=$_POST["chk_land"];
$houseflat=$_POST["chk_houseflat"];
$villa=$_POST["chk_villa"];
$officespace=$_POST["chk_officespace"];
$warehouse=$_POST["chk_warehouse"];
$other=$_POST["other"];
$location=$_POST["location"];
$additionalcomment=$_POST["additionalcomment"];
$purpose=$_POST["purpose"];


if(($firstname=="") || ($lastname=="") || ($sex=="") || ($nationality=="") || ($position=="") || ($email=="") || ($phone=="") || ($address=="") || ($codebanner=="") || ($date=="") || ($buy=="") || ($sale=="") || ($rent=="") || ($budget=="") || ($apartment=="") || ($building=="") || ($business=="") || ($condo=="") || ($factory=="") || ($hotel=="") || ($land=="") || ($houseflat=="") || ($villa=="") || ($officespace=="") || ($warehouse=="") || ($other=="") || ($location=="") || ($additionalcomment=="") || $purpose==""){
  		header('location:index.php');
}else{

mysqli_query($conn,"insert into customer (firstname,lastname,sex,nationality,position,email,phone,address,codebanner,date,buy,sale,rent,budget,apartment,building,business,condo,factory,hotel,land,houseflat,villa,officespace,warehouse,other,location,additionalcomment,purpose)
			values('$firstname','$lastname','$sex','$nationality','$position','$email','$phone','$address','$codebanner','$date','$buy','$sale','$rent','$budget','$apartment','$building','$business','$condo','$factory','$hotel','$land','$houseflat','$villa','$officespace','$warehouse','$other','$location','$additionalcomment','$purpose')");
			 header('location:index.php');
		}
}
?>