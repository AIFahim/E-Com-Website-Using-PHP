<?php 
$sql = "SELECT * FROM categories ORDER BY name ASC";
$result = mysqli_query($con, $sql);
 ?>

<div class="top_header">
		<div class="container">
			<ul class="text-right">
				<?php
			        if(!(isset($_SESSION['customer_login']) && $_SESSION['customer_login'] == true))
			        {
			          ?>
					    <li> 
					    	<a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In </a>
					    </li>
						<li> 
							<a href="#" data-toggle="modal" data-target="#signup-modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a>
						</li>
						<?php
				    }
				        ?>
				<li><i class="fa fa-phone" aria-hidden="true"></i> Call : 0123456789</li>
				<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@mirshop.com">asif.iqbal.fahim.bd@gmail.com</a></li>
			</ul>
		</div>
	</div>
	<div class="header-bot">
		<div class="container">
			<div class="col-md-4 header-middle">
				<form action="search.php" method="GET">
					<input name="search" placeholder="Search" required="" type="search">
					<button type="search"><i class="fa fa-search" aria-hidden="true"></i></button>
					<div class="clearfix"></div>
				</form>
			</div>
			<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="index.php" class="logo_d"><span>F & E</span> Shoppy <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>
	        <!-- header-bot -->
	        <!-- ==========social====== -->
			<div class="col-md-4 agileits-social top_content">
				<ul class="social-nav model-3d-0 footer-social w3_agile_social">
					<li class="share">Share On : </li>
					<li><a href="#" class="facebook">
						<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
					</li>
					<li><a href="#" class="twitter"> 
						<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
					<li><a href="#" class="instagram">
						<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a>
					</li>
					<li><a href="#" class="pinterest">
						<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a>
					</li>										
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- =======menu=========== -->
	<div class="btm_header">
		<div class="container">
			<nav class="menu navbar navbar-inverse">
		        <div class="container-fluid">
		          <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		              <span class="sr-only">Toggle navigation</span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
		            <h1><a class="navbar-brand logo_d" href="index.php">F & E Shoppy</a></h1>
		            
		          </div>
		          <div id="navbar" class="navbar-collapse collapse">
		            <ul class="nav navbar-nav">
		              <li class="active"><a href="index.php">Home</a></li>
		              <li class="dropdown">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
		                <ul class="dropdown-menu">
		                	<?php 
		                		if (mysqli_num_rows($result)>0) {
		                			while ($row = mysqli_fetch_assoc($result)) {
		                				?>
		                					<li>
		                						<a href="category_products.php?category_id=<?php echo $row['id']?>">
		                							<?php echo $row['name']; ?>
		                						</a>
		                					</li>
		                				<?php
		                			}
		                		}
		                	
		                	 ?>
		                </ul>
		              </li>
		              
		              
		            </ul>
		            <ul class="nav navbar-nav navbar-right">
				      <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> View Cart</a></li>
				      	<li>
				      		<?php
        					if(isset($_SESSION['customer_login']) && $_SESSION['customer_login'] == true)
        					{
          						?>
				      			<a href="logout.php"><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo $_SESSION['customer']['first_name']; ?> [Log Out]</a>
				      			<?php
        					}
        					?>
				      	</li>
				    </ul>
		          </div><!--/.nav-collapse -->
		        </div><!--/.container-fluid -->
		    </nav>
		</div>
	</div>
    <!-- ======= menu end ========== -->

    <!-- ============= login =========== -->

    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      	<div class="modal-dialog">
			<div class="log-section panel panel-info">
				<div class="panel-heading">
					<h3>
						<i class="fa fa-lock"></i> Log_In
					</h3>							
				</div>
				<div class="panel-body">
					<form action="check_login.php" method="POST" class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-3 u-label">Email:</label>
							<div class="col-sm-9">
								<input type="email" name="email" class="form-control" placeholder="Enter Your Email" required="required">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 u-label">Password:</label>
							<div class="col-sm-9">
								<input type="password" name="password" class="form-control" placeholder="Enter Your Password" required="required">
							</div>
						</div>

						<hr>
						<button type="submit" class="btn btn-success pull-right" name="login">Login</button>
					</form>
				</div>
			  	<div class="panel-footer login-help">
			  		<div class="col-sm-6">
			  			<a href="#" data-toggle="modal" data-target="#signup-modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a>
			  		</div>
			  		<div class="col-sm-6 text-right">
			  			<a href="forgot_password.php">Forgot Password ? Click Here</a>
			  		</div>
			  		<div class="clearfix"></div>					
				</div>

			</div>
		</div>
	</div>
          
<!-- =========== log in end================== -->   


<!-- =========== Sign UP================== -->
          
<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
    			<div class="log-section panel panel-info">
					<div class="panel-heading">
						<h3>
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Create a new account
						</h3>
					</div>
				  <div class="panel-body">
							<form action="registration.php" method="POST" class="form-horizontal">

								<div class="form-group">
									<label class="col-sm-3 u-label">First Name:</label>
									<div class="col-sm-9">
										<input type="text" name="first_name" class="form-control" placeholder="Enter Your First Name" required="required">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 u-label">Last Name:</label>
									<div class="col-sm-9">
										<input type="text" name="last_name" class="form-control" placeholder="Enter Your Last Name" required="required">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 u-label">Email:</label>
									<div class="col-sm-9">
										<input type="email" name="email" class="form-control" placeholder="Enter Your Email" required="required">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 u-label">Password:</label>
									<div class="col-sm-9">
										<input type="password" name="password" class="form-control" placeholder="Enter Your Password" required="required">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 u-label">Mobile No.:</label>
									<div class="col-sm-9">
										<input type="text" name="mobile_no" class="form-control" placeholder="Enter Your Mobile No." required="required">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 u-label">Address:</label>
									<div class="col-sm-9">
										<input type="text" name="address" class="form-control" placeholder="Enter Your Address" required="required">
									</div>
								</div>

								<hr>
								<button type="submit" class="btn btn-success pull-right" name="register">Create account</button>
							</form>
						</div>
				</div>
			</div>
		  </div>
<!-- ============Sign up end============== -->