<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php include('dbcon.php'); ?>


    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
					
				<div class="login">
				<div class="log_txt">
				<p><strong>Please Enter the Details Below</strong></p>
				</div>
						<form class="form-horizontal" action="login.php" method="POST">
						<div class="control-group">
						<label class="control-label" >User Type</label>
								<div class="controls">
									<select id="member_type" name="member_type">
									  <option value="admin">Admin</option>
									  <option value="librarian">Librarian</option>
									  <option value="member">Member</option>
									</select>
								</div>
							</div>
								<div class="control-group">
									<label class="control-label" for="inputEmail">Username</label>
									<div class="controls">
									<input type="text" name="username" id="username" placeholder="Username" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword">Password</label>
									<div class="controls">
									  <p>
									    <input type="password" name="password" id="password" placeholder="Password" required>
									  </p>
									  <p><a href="add_member.php">Create account</a></p>
						          </div>
								</div>
								<div class="control-group">
									<div class="controls">
									<button id="login" name="submit" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Login</button>
								</div>
								</div>
								
								
						</form>
				
				</div>
			</div>		
			</div>
		</div>
    </div>
	
<?php include('footer.php') ?>