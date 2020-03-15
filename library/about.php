<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				
				<div class="span12">
					<div class="header">
						<div class="pull-left">
						<IMG STYLE="position:absolute; LEFT:200px; WIDTH:1737px; HEIGHT:187px" SRC="LMS/librarylogo1.jpg">
						</div>
					</div>
		
					<div class="alert alert-info"><Strong>Hello!</strong>&nbsp;Welcome to KUPTM Library System
							<div class="pull-right">
								<i class="icon-calendar icon-large"></i>
								<?php
								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>
							</div>
					</div>
						
				
				
				  <h4>Vision</h4>
				  <p>Creating world- class library facilities through the development of dynamic and innovative information resources.</p>
				  <h4>Mission</h4>
				  <p>Providing comprehensive resources and services to support the needs and requirements of the University in teaching, learning, research, innovation and publication.</p>
				  <h4>Philosophy</h4>
				  <p>Developing a knowledgable, outstanding and progressive society founded on mastery and love of knowledge through the inculcation of positive reading habits and lifelong learning culture.</p>
				  <h4>Objective</h4>
				  <ul>
				    <li>Developing quality resources and information.</li>
				    <li>Providing efficient, effective, accurate and user- friendly services.</li>
				    <li>Optimising utilisation of various information, facilities and services.</li>
				    <li>Cultivating a knowledge culture among the University community and surrounding localities.</li>
			      </ul>
				  <h4>Client Charter</h4>
				  <p>We pledge to:</p>
				  <ul>
				    <li>Develop and enhance the depository of quality resources and information.</li>
				    <li>Provide efficient, effective and accurate information at all times.</li>
				    <li>Provide user- friendly services.</li>
				    <li>Provide a conducive learning environment.</li>
			      </ul>
				  <h4>Motto</h4>
				  <p>"To Serve with Quality"</p>
					
				</div>				
				
			</div>
			
		</div>
    </div>
<?php include('footer.php') ?>