<?php include "inc/header.php"; ?>

	<!-- Content Wrapper Start -->
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h1 class="m-0">User Management</h1>
	          </div><!-- /.col -->
	          <div class="col-sm-6">
	            <ol class="breadcrumb float-sm-right">
	              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
	              <li class="breadcrumb-item active">User Management</li>
	            </ol>
	          </div><!-- /.col -->
	        </div><!-- /.row -->
	      </div><!-- /.container-fluid -->
	    </div>
	    <!-- /.content-header -->

	    <!-- Main content -->
	    <section class="content">
	      	<div class="container-fluid">
		        <div class="row">
		          <div class="col-12 col-sm-12 col-md-12">

		          	<?php  


		          		// if ( isset( $_GET['do'] ) )
		          		// {
		          		// 	$do = $_GET['do'];
		          		// 	echo $do;
		          		// }
		          		// else
		          		// {
		          		// 	$do = "Manage";
		          		// 	echo $do;
		          		// }

		          		// Ternary Condition [ Condition ? True Vlaue : False Value ]
		          		$do = isset( $_GET['do'] ) ? $_GET['do'] : "Manage";

		          		// All Users Manage Page
		          		if ( $do == "Manage" )
		          		{
		          			
		          			?>

		          			<!-- Card Start -->
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">All Users Manage Page</h3>

									<div class="card-tools">
									  <button type="button" class="btn btn-tool" data-card-widget="collapse">
									    <i class="fas fa-minus"></i>
									  </button>					
									</div>
								</div>

								<div class="card-body">

									<table class="table table-dark table-striped table-hover table-bordered">
									  <thead>
									    <tr>
									      <th scope="col">#Sl.</th>
									      <th scope="col">Picture</th>
									      <th scope="col">Full Name</th>
									      <th scope="col">Email Address</th>
									      <th scope="col">Phone No.</th>
									      <th scope="col">Address</th>
									      <th scope="col">Gender</th>
									      <th scope="col">Action</th>
									    </tr>
									  </thead>

									  <tbody>
									    <tr>
									      <th scope="row">1</th>
									      <td>Mark</td>
									      <td>Otto</td>
									      <td>mdo</td>
									      <td>mdo</td>
									      <td>mdo</td>
									      <td>mdo</td>
									      <td>mdo</td>
									    </tr>
									    
									  </tbody>
									</table>	

								</div>
							</div>
		          			<!-- Card End -->

		          			<?php

		          		}


		          		// This is Create new Users Html Page
		          		else if ( $do == "Create" )
		          		{
		          			?>

		          			<!-- Card Start -->

	          				<div class="card">
				              <div class="card-header">
				                <h3 class="card-title">Add New Users</h3>

				                <div class="card-tools">
				                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
				                    <i class="fas fa-minus"></i>
				                  </button>					
				                </div>
				              </div>

				              <div class="card-body">

				              	<form action="" method="" enctype="multipart/form-data">
				              		<div class="form-group">
				              			<label>Full Name</label>
				              			<input type="text" name="fullname" class="form-control" required="required" autocomplete="off" placeholder="Your Full Name">
				              		</div>
				              	</form>
				                
				              </div>
				            </div>

		          			<!-- Card End -->

		          			<?php
		          		}


		          		else if ( $do == "Store" )
		          		{
		          			echo "This Store page will store the new users data into the Database";
		          		}


		          		else if ( $do == "Edit" )
		          		{
		          			echo "This Edit Page will show the update users info in a html file";
		          		}


		          		else if ( $do == "Update" )
		          		{
		          			echo "This Update page will update the users existing data info into the database";
		          		}


		          		else if ( $do == "Delete" )
		          		{
		          			echo "We will delete the users from database";
		          		} 

		          	?>

		          </div>
		      	</div>
	  		</div>
		</section>
	</div>
    <!-- Content Wrapper End -->

<?php include "inc/footer.php"; ?>