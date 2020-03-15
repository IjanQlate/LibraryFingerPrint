<?php
								include('dbcon.php');
								if (isset($_POST['submit'])){
									session_start();
									$username = $_POST['username'];
									$password = $_POST['password'];
									$user_type = $_POST['member_type'];
									$member_type = $_POST['member_type'];
									if($member_type = 'admin'){
										$query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND user_type='admin'";
										$result = mysqli_query($link,$query)or die(mysqli_error($link));
										$num_row = mysqli_num_rows($result);
											$row=mysqli_fetch_array($result);
											if( $num_row > 0 ) {
												header('location:admin/dashboard.php');
										$_SESSION['id']=$row['user_id'];
											}
									        else{header('location:access_denied.php');}
									}
									if($member_type = 'librarian'){
										$query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND user_type='librarian'";
										$result = mysqli_query($link,$query)or die(mysqli_error($link));
										$num_row = mysqli_num_rows($result);
											$row=mysqli_fetch_array($result);
											if( $num_row > 0 ) {
												header('location:librarian/dashboard.php');
										$_SESSION['id']=$row['user_id'];
											}
											
									}
									
									if($member_type = 'member'){
										$query = "SELECT * FROM member WHERE username='$username' AND password='$password' AND member_type='member'";
										$result = mysqli_query($link,$query)or die(mysqli_error($link));
										$num_row = mysqli_num_rows($result);
											$row=mysqli_fetch_array($result);
											if( $num_row > 0 ) {
												header('location:member/dashboard.php');
										$_SESSION['id']=$row['member_id'];
											}
									} 
									
								}
								
								?>