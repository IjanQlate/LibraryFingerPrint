	<div id="add_user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Add User</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Username</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="username" placeholder="Username" required>
				</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="inputPassword">Password:</label>
			<div class="controls">
			<input type="password" id="myInput" name="password"  placeholder="Password" required>
			<input type="checkbox" onclick="myFunction()">Show Password
			<script>
                 function myFunction() {
                 var x = document.getElementById("myInput");
                 if (x.type === "password") {
                 x.type = "text";
                 } else {
                 x.type = "password";
                 }
                  }
            </script>

			</div>
		</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">Firstname</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="firstname" placeholder="Username" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">Lastname</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="lastname" placeholder="Username" required>
				</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="inputPassword">Type:</label>
			<div class="controls">
			<select name="user_type" required>
			
			
			
									<option></option>
									<option>admin</option>
									<option>librarian</option>
									<option></option>
									
				</select>
			</div>
		</div>
			<div class="control-group">
				<div class="controls">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$user_type=$_POST['user_type'];
	
	mysqli_query($link,"insert into users (username,password,firstname,lastname,user_type) values('$username','$password','$firstname','$lastname','$user_type')")or die(mysqli_error($link));
	}
	?>