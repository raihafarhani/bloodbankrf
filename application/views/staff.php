<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:th="http://www.thymeleaf.org">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Staff</title>
	
	<!--JQUERY-->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
	<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script 
		src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script 
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
	<!-- Los iconos tipo Solid de Fontawesome-->
	<link rel="stylesheet"
		href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	
	<!-- Nuestro css-->
	<link rel="stylesheet" type="text/css" href="static/css/user-form.css"
		th:href="@{/css/user-form.css}">
	<!-- DATA TABLE -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">	
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

	<script type="text/javascript">
	    $(document).ready(function() {
	        //Asegurate que el id que le diste a la tabla sea igual al texto despues del simbolo #
	        $('#userList').DataTable();
	    } );

	</script>
    <style>
	
    /* Use a media query to add a break point at 800px: */
@media screen and (max-width:800px) {
  .left, .main, .right {
    width:100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
}

.card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
		 text-align: center;
}

body{
	background-color: #800000;
	margin-top: 90px;
	margin-bottom: 30px;
	margin-left: 0px;
	margin-right: 500px;
}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
           

        </style>
</head>
<body>
 <!-- Navbar -->
 <div class="w3-top">
  <div class="w3-bar w3-card w3-left-align w3-large w3-red">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="<?php echo site_url('index.php/mstaff') ?>" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    
    <a href="<?php echo site_url('index.php/blood') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Blood</a>
    <a href="<?php echo site_url('index.php/donor') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Donor</a>
	</div> 
  </div>
<!-- Display Staff HTML -->
    <div class="flex-center position-ref full-height">
	<div class="container">
	<div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
		<ul class="nav nav-tabs nav-justified">
			<li class="nav-item bg-danger">
			<a class="nav-link" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">List</a>
			</li>
			<li class="nav-item bg-danger">
			<a class="nav-link" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="true">Add Staff</a>				   	
			</li>
		</ul>
		
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
				<div class="card" style="width:1000px">
					<div class="card-header bg-danger text-white">
						<h4>Staff List</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="userList" class="table table-bordered table-hover table-striped">
								<thead class="thead-light">
								<tr>
									<th scope="col">No</th>
									<th scope="col">Staff ID</th>
									<th scope="col">Staff Name</th>
									<th scope="col">Staff Password</th>
                                    <th scope="col">Contact Number</th>
									<th scope="col">E-mail</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
                                <?php 
                                $no = 1;
                                foreach ($result as $r) { ?>
								<tr>
									<th><?php echo $no++ ?></th>
									<td><?php echo $r['StaffID'] ?></td>
									<td><?php echo $r['StaffName'] ?></td>
									<td><?php echo $r['StaffPass'] ?></td>
									<td><?php echo $r['ContactNum'] ?></td>
                                    <td><?php echo $r['Email'] ?></td>
									<td>
                                    <a href="<?php echo site_url('index.php/staff/form_edit/' .$r['StaffID']) ?>"><i class="fas fa-edit"></i></a>
                                    <a href="<?php echo site_url('index.php/staff/delete/' .$r['StaffID']) ?>"><i class="fas fa-user-times"></i></a>
                                    </td>
									</tr>
                                <?php } ?>
								</tbody>
							</table>
						</div>

					</div>
				</div>
			</div>
			<!-- Add Staff HTML -->
			<div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
				<div class="card" style="width:1000px">
					<div class="card-header">
						<h4>Staff Information</h4>
					</div>
					<div class="card-body">
                    <form action="<?php echo site_url('index.php/Staff/insert'); ?>" method="POST">

						<form class="form" role="form" autocomplete="off">
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Staff Name</label>
								<div class="col-lg-9">
									<input class="form-control" type="text" name="StaffName">
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Contact Number</label>
								<div class="col-lg-9">
									<input class="form-control" type="text" name="ContactNum">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Email</label>
								<div class="col-lg-9">
									<input class="form-control" type="email" name="Email">
								</div>
							</div>
                            <div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Staff Password</label>
								<div class="col-lg-9">
									<input class="form-control" type="password" name="StaffPass">
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Confirm Password</label>
								<div class="col-lg-9">
									<input class="form-control" type="password" name="StaffPass">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-12 text-center">
									<input type="reset" class="btn btn-secondary" value="Cancel">
									<input type="submit" class="btn btn-primary" name="submit"
										value="Submit">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			</div>
			
		
	<!-- Delete Modal HTML -->
	<div id="deleteStaffModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Staff</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
		</div>
	</div>
</div>
</body>
</html>
