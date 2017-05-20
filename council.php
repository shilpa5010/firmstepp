<?php
ini_set('display_errors',0);
ob_start();
session_start();
include("config.php");
include("functions.php");
   $details = new councilDetails();
   $cDetails = $details->getCurlCouncilDetails($conn);
   //echo "<pre>";print_r($cDetails);exit;
?>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Council Details</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" style="width: 1300px;height: auto;">
            <div class="panel">
              <div class="modal-dialog" style="width: 1300px;height: auto;">
  <div class="modal-content">
           
                      
                    <div class="panel-heading">
                    <div class="modal-header">
                    <h3 class="text-center">Council Details</h3><div style="text-align: right"><a href="index.php" target="_blank">Add Council Details</a></div>
                    </div>
                        
                    <div class="panel-body">
                      <div class="responsive-table" id="divcontent">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        
                      <thead>
                        <tr>
                          <th>Type</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Organization</th>
                          <th>Service</th>
                         </tr>
                      </thead>
			<tbody>
		        <?php
                        foreach ($cDetails as $key => $value) {?>
                        <tr>
                          <td><?=$value['type']?></td>
                          <td><?=($value['firstName']!=""?$value['firstName']:"-")?></td>
                          <td><?=($value['lastName']!=""?$value['lastName']:"-")?></td>
                          <td><?=($value['organization']!=""?$value['organization']:"-")?></td>
                          <td><?=($value['service']!=""?$value['service']:"-")?></td>
                        </tr>
					  <?php }?>
					  
						</tbody>
                      </table>
                      </div>
                  </div>
  </div></div>
                    
                    
                </div>
  </div>
</div>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
                <script src="js/council.js"></script>
	</body>
</html>

