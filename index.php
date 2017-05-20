<?php
ini_set('display_errors',0);
include("config.php");
include("functions.php");
if(isset($_POST["cdetails"]) && $_POST["cdetails"]!="") { 
    //print_r($_POST);
    $var = new councilDetails();
    $var->cDetails($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Add Council Details</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" style="width: 1300px;">
  <div class="modal-content">
      <div class="modal-header">
          <div style="text-align: center"><?php if(isset($_GET['msg']) && $_GET['msg']== 1){ echo "<font color='green' style='align:center;'>Council Details added successfully !!</font>";} else if(isset($_GET['msg']) && $_GET['msg']== 0){ echo "<font color='red' style='align:center;'>Unable to add Council Details !!</font>";}?></div>
          <h3 class="text-center">Add Details</h3><div style="text-align: right"><a href="council.php" target="_blank" >Click here to view Details</a></div>
      </div>
      <div class="modal-body" style="width:1000px;">
          <form class="form col-md-12 center-block" name="validation" id="validation"  onsubmit="return formvalidation();" method="post" action="index.php">
            <div class="form-group">
                  Type*:  <select name="type" id="type" class="form-control input-lg">
                           <option value="0">Select</option>   
                                <option value="Citizen">Citizen</option>   
                                     <option value="Anonymous">Anonymous</option>   
                           </select> 
             </div>  
            <div class="form-group">
              First Name: <input type="text" class="form-control input-lg" placeholder="First Name" name="first_name" id="first_name">
            </div>
            <div class="form-group">
             Last Name:  <input type="text" class="form-control input-lg" placeholder="Last Name" name="last_name" id="last_name">
            </div>
            <div class="form-group">
             Organization:  <input type="text" class="form-control input-lg" placeholder="Organization" name="organization" id="organization">
            </div>
              <div class="form-group">
             Service:  <select name="service" id="service" class="form-control input-lg">
                           <option value="0">Select</option>   
                                <option value="Council Tax">Council Tax</option>   
                                <option value="Benefits">Benefits</option>   
                                <option value="Rent">Rent</option>   
                           </select> 
            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-lg btn-block" type="submit" name="cdetails" id="cdetails" value="Submit" style="width: 100px;"/>
              <span class="pull-right"></span><span></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
         
		  </div>	
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
                <script src="js/council.js"></script>
	</body>
</html>