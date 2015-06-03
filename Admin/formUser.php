<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style" href="css/bootstrap-tagsinput.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
		
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
					<a class="brand" href="mainUserPage.php"><span>Korisnički portal @Kosak</span></a>
					<!-- start: Header Menu -->
					<div class="nav-no-collapse header-nav">
						<ul class="nav pull-right">
							<li class="dropdown hidden-phone">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>
								<ul class="dropdown-menu notifications">
									<li class="dropdown-menu-title">
										<span>You have 11 notifications</span>
										<a href="#refresh"><i class="icon-repeat"></i></a>
									</li>
									<li>
										<a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">Registracija novog korisnika</span>
										<span class="time">1 min</span> 
                                    </a>
									</li>
									<li>
										<a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">Novi komentar</span>
										<span class="time">7 min</span> 
                                    </a>
									</li>
									<li>
										<a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span> 
                                    </a>
									</li>
									<li>
										<a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span> 
                                    </a>
									</li>
									<li>
										<a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span> 
                                    </a>
									</li>
									<li>
										<a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span> 
                                    </a>
									</li>
									<li class="warning">
										<a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span> 
                                    </a>
									</li>
									<li class="warning">
										<a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">New comment</span>
										<span class="time">6 hour</span> 
                                    </a>
									</li>
									<li>
										<a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span> 
                                    </a>
									</li>
									<li>
										<a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span> 
                                    </a>
									</li>
									<li class="dropdown-menu-sub-footer">
										<a>View all notifications</a>
									</li>
								</ul>
							</li>
							<!-- start: Notifications Dropdown -> Raspoloživi nodovi -->
							
							<!-- end: Notifications Dropdown -->
							<!-- start: Message Dropdown -->
							<li class="dropdown hidden-phone">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white envelope"></i>
							</a>
								<ul class="dropdown-menu messages">
									<li class="dropdown-menu-title">
										<span>You have 9 messages</span>
										<a href="#refresh"><i class="icon-repeat"></i></a>
									</li>
									<li>
										<a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
									</li>
									<li>
										<a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
									</li>
									<li>
										<a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
									</li>
									<li>
										<a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
									</li>
									<li>
										<a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
									</li>
									<li>
										<a class="dropdown-menu-sub-footer">View all messages</a>
									</li>
								</ul>
							</li>
							<!-- end: Message Dropdown -->
							<li>
								<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
							</li>
							<!-- start: User Dropdown -->
							<li class="dropdown">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <?php echo $_SESSION["currUsername"]; ?>
								<span class="caret"></span>
							</a>
								<ul class="dropdown-menu">
									<li class="dropdown-menu-title">
										<span>Account Settings</span>
									</li>
									<li>
										<a href="#"><i class="halflings-icon user"></i> Profile</a>
									</li>
									<li>
										<a href="login.html"><i class="halflings-icon off"></i> Logout</a>
									</li>
								</ul>
							</li>
							<!-- end: User Dropdown -->
						</ul>
					</div>
					<!-- end: Header Menu -->
				</div>
			</div>
		</div>
		<!-- start: Header -->
		<div class="container-fluid-full">
			<div class="row-fluid">
				<!-- start: Main Menu -->
				<div id="sidebar-left" class="span2">
					<div class="nav-collapse sidebar-nav">
						<ul class="nav nav-tabs nav-stacked main-menu">
							<li>
								<a href="mainUserPage.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a>
							</li>
							
							<li>
								<a href="tableForUser.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Uplate</span></a>
							</li>
							
							<li>
								<a href="messagesForUser.php"><i class="icon-envelope"></i><span class="hidden-tablet"> Poruke</span></a>
							</li>
							
							
							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Oraspoloži se</span><span class="label label-important"> 3 </span></a>
								<ul>
									<li>
										<a class="submenu" href="http://agar.io/"><i class="icon-file-alt"></i><span class="hidden-tablet"> Agar.io</span></a>
									</li>
									<li>
										<a class="submenu" href="https://www.gifyoutube.com/gif/KRxngp"><i class="icon-file-alt"></i><span class="hidden-tablet"> Maroon 5</span></a>
									</li>
									<li>
										<a class="submenu" href="http://metro-portal.hr/vijesti/vic-dana/"><i class="icon-file-alt"></i><span class="hidden-tablet"> Vic dana :D</span></a>
									</li>
								</ul>
							</li>
							<li>
								<a href="formUser.php"><i class="icon-edit"></i><span class="hidden-tablet"> Obrazci za unos</span></a>
							</li>
							
							<li>
								<a href="typographyForUser.html"><i class="icon-font"></i><span class="hidden-tablet"> O nama</span></a>
							</li>
							
							<li>
								<a href="galleryForUser.html"><i class="icon-picture"></i><span class="hidden-tablet"> Galerija slika</span></a>
							</li>
							
							<li>
								<a href="calendarForUser.php"><i class="icon-calendar"></i><span class="hidden-tablet"> Kalendar</span></a>
							</li>
							
							<li>
								<a href="index.php"><i class="icon-lock"></i><span class="hidden-tablet"> Stranica za prijavu</span></a>
							</li>
						</ul>
					</div>
				</div>
				<!-- end: Main Menu -->
				<noscript>
					<div class="alert alert-block span10">
						<h4 class="alert-heading">Warning!</h4>
						<p>You need to have
							<a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>enabled to use this site.</p>
					</div>
				</noscript>
				
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Forms</a>
				</li>
			</ul>
			
			
			
			
			
			<!--Forma za unos pitanja-->
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Pitaj što te zanima </h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						
						<form class="form-horizontal" action="insertQuestion.php" method="post">
						  <fieldset>
							
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Postavi pitanje</label>
							  <div class="controls">
								<textarea class="form-control" rows="3" columns="5" name="pitanje" data-provide="typeahead"></textarea>
							  </div>
							</div>
							
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Pitaj</button>
							  <button type="reset" class="btn">Odustani</button>
							</div>
							
						  </fieldset>
						</form>   
						
						
					</div>
				</div><!--/span-->

			</div><!--/row-->
			
			
			<!-- Forma za unos web stranice -->
			<div class="row-fluid sortable">
				<div class="box span12">
					
					<div class="box-content">
						<form class="form-horizontal" action="insertPages.php" method="post">
							<fieldset>
							  
							  <div class="control-group warning" >
								<label class="control-label" for="inputWarning">Unesite stranice na kojima ne želite surfati</label>
								<div class="controls">
								  <input type="text" name="stranice" data-role="tagsinput" placeholder="Add tags"  >
								</div>
							  </div>
							  
							  
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Unesite stranice</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
				
			
			</div><!--/row-->
			
			
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="prependedInput">Prepended text</label>
								<div class="controls">
								  <div class="input-prepend">
									<span class="add-on">@</span><input id="prependedInput" size="16" type="text">
								  </div>
								  <p class="help-block">Here's some help text</p>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="appendedInput">Appended text</label>
								<div class="controls">
								  <div class="input-append">
									<input id="appendedInput" size="16" type="text"><span class="add-on">.00</span>
								  </div>
								  <span class="help-inline">Here's more help text</span>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="appendedPrependedInput">Append and prepend</label>
								<div class="controls">
								  <div class="input-prepend input-append">
									<span class="add-on">$</span><input id="appendedPrependedInput" size="16" type="text"><span class="add-on">.00</span>
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="appendedInputButton">Append with button</label>
								<div class="controls">
								  <div class="input-append">
									<input id="appendedInputButton" size="16" type="text"><button class="btn" type="button">Go!</button>
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="appendedInputButtons">Two-button append</label>
								<div class="controls">
								  <div class="input-append">
									<input id="appendedInputButtons" size="16" type="text"><button class="btn" type="button">Search</button><button class="btn" type="button">Options</button>
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Checkboxes</label>
								<div class="controls">
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1"> Option 1
								  </label>
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2"> Option 2
								  </label>
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox3" value="option3"> Option 3
								  </label>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">File Upload</label>
								<div class="controls">
								  <input type="file">
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label">Radio buttons</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
									Option one is this and that—be sure to include why it's great
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
									Option two can be something else and selecting it will deselect option one
								  </label>
								</div>
							  </div>
							  
							  
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save changes</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						</form>
					</div>
				</div><!--/span-->

			</div><!--/row-->
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
			
			
			<script src="js/bootstrap-tagsinput.js"></script>
				
				<script src="js/bootstrap-tagsinput.min.js"></script>
					
					<script src="js/bootstrap-tagsinput.less"></script>
				
				<script src="js/bootstrap-tagsinput.min.js.map"></script>
					
					<script src="js/bootstrap-tagsinput-angular.js"></script>
					
				<script src="js/bootstrap-tagsinput-angular.mim.js"></script>
			
			
	<!-- end: JavaScript-->
	
</body>
</html>
