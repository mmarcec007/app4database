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
					<a class="brand" href="index.html"><span>Portal za aministratore @Kosak</span></a>
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
							<li class="dropdown hidden-phone">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white tasks"></i>
							</a>
								<ul class="dropdown-menu tasks">
									<li class="dropdown-menu-title">
										<span>Status čvorova</span>
										<a href="#refresh"><i class="icon-repeat"></i></a>
									</li>
									<li>
										<a href="#">
										<span class="header">
											<span class="title">Node Pleškovec</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
									</li>
									<li>
										<a href="#">
										<span class="header">
											<span class="title">Node Dujnkovec</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div> 
                                    </a>
									</li>
									<li>
										<a href="#">
										<span class="header">
											<span class="title">Node Vukanovec</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim yellow">32</div> 
                                    </a>
									</li>
									<li>
										<a href="#">
										<span class="header">
											<span class="title">Node Čakovec-jug</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                    </a>
									</li>
									<li>
										<a href="#">
										<span class="header">
											<span class="title">Node Čakovec-plac</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim orange">80</div> 
                                    </a>
									</li>
									<li>
										<a class="dropdown-menu-sub-footer">View all tasks</a>
									</li>
								</ul>
							</li>
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
										    	mmarcec007
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
								<i class="halflings-icon white user" name="usernameOfUser"></i> <?php  echo $_SESSION["currUsername"]; ?>
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
								<a href="mainPage.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a>
							</li>
							<li>
								<a href="messages.php"><i class="icon-envelope"></i><span class="hidden-tablet"> Poruke</span></a>
							</li>
							<li>
								<a href="tasks.php"><i class="icon-tasks"></i><span class="hidden-tablet"> Naruđbe</span></a>
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
								<a href="form.php"><i class="icon-edit"></i><span class="hidden-tablet"> Obrazci za unos</span></a>
							</li>
							<li>
								<a href="chart.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> Grafovi</span></a>
							</li>
							<li>
								<a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Topografija</span></a>
							</li>
							<li>
								<a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Galerija</span></a>
							</li>
							<li>
								<a href="table.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tablice</span></a>
							</li>
							<li>
								<a href="calendar.php"><i class="icon-calendar"></i><span class="hidden-tablet"> Kalendar</span></a>
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
			
			<!--Forma za unos klijenata-->
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Unos novog klijenta</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						
						<form class="form-horizontal" action="insertUser.php" action="odaberiMjesto.php" method="POST" method="post">
						  <fieldset>
							  
						
							<h2>Osobni podaci </h2>
							<div class="control-group">
							  <label class="control-label" for="typeahead">ID </label>
							  <div class="controls">
								<input type="text" pattern="^([_0-9]){3,}$" minlenght="1" maxlength="20" class="span2 typeahead" name="ID_us" data-provide="typeahead" >
									<span class="help-block with-errors">Najviše 20 znamenki.</span>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Ime </label>
							  <div class="controls">
								<input type="text" pattern="^([_A-ž]){3,}$" minlenght="1" maxlength="45" class="span2 typeahead" name="ime_us"  data-provide="typeahead" >
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Prezime </label>
							  <div class="controls">
								<input type="text" pattern="^([_A-ž]){3,}$" minlenght="1" maxlength="45" class="span2 typeahead" name="prezime_us"  data-provide="typeahead" >
							  </div>
							</div>
							
							<!--
							<div class="control-group">
							  <label class="control-label" for="typeahead">Poštanski broj </label>
							  <div class="controls">
								<input type="text" class="span2 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["40311", "47220"]'>
							  </div>
							</div>
							-->
							
							<div class="control-group">
								<label class="control-label" for="selectError">Mjesto stanovanja</label>
								<div class="controls">
								  <select name="mjesto" onchange="showMjesto(this.value)" data-rel="chosen">
									<option selected="selected"> Odabir mjesta</option>
										<?php
									        require('config.php');
											
									        $category = "SELECT nazivMjesto FROM mjesto";
									        $query_result = mysql_query($category);
									        while($result = mysql_fetch_assoc($query_result))
									        {
									        ?>
									            <option value = "<?php echo $result['nazivMjesto']?>"><?php echo $result['nazivMjesto']?></option>
									        <?php
									        }
									
									    ?>  
								  </select>
								</div>
							  </div>
							  
							 <div class="control-group">
							  <label class="control-label" for="typeahead">Adresa </label>
							  <div class="controls">
								<input type="text" pattern="^([_A-ž, 0-9]){3,}$" minlenght="1" maxlength="45" class="span2 typeahead" name="adresa"  data-provide="typeahead" >
							  </div>
							</div>
							  
							  <div class="control-group">
								<label class="control-label" for="selectError">Spojen na</label>
								<div class="controls">
								  <select name="ID_cvor" onchange="showCvor(this.value)" data-rel="chosen">
									<option selected="selected"> Odabir čvora</option>
										<?php
									        require('config.php');
											
									        $category = "SELECT ID_cvor FROM cvor";
									        $query_result = mysql_query($category);
									        while($result = mysql_fetch_assoc($query_result))
									        {
									        ?>
									            <option value = "<?php echo $result['ID_cvor']?>"><?php echo $result['ID_cvor']?></option>
									        <?php
									        }
											
									    ?>  
								  </select>
								</div>
							  </div>
						
						
							<div class="control-group">
							  <label class="control-label" for="typeahead">Naziv konekcije</label>
							  <div class="controls">
								<input type="text" pattern="^([_A-ž, 0-9]){3,}$" minlenght="1" maxlength="45" class="span2 typeahead" name="nazivKonekcije"  data-provide="typeahead" >
							  </div>
							</div>
							
							
							  
							  <h2>Profil  </h2>
							  <div class="control-group">
							  <label class="control-label" for="typeahead">Korisnčko ime </label>
							  <div class="controls">
								<input type="text" pattern="^([_A-ž, 0-9]){3,}$" minlenght="1" maxlength="45" class="span2 typeahead" name="nazivPro" data-provide="typeahead" >
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Lozinka</label>
							  <div class="controls">
								<input type="text" pattern="^([_A-ž, 0-9]){3,}$" minlenght="1" maxlength="45" class="span2 typeahead" name="PWPro"  data-provide="typeahead" >
							  </div>
							</div>
							
						   
							  <div class="control-group">
								<label class="control-label">Vrsta profila</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="User" checked="">
									User
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="Admin">
									Admin
								  </label>
								</div>
							  </div>
						   
						        
						  <div class="control-group">
							<label class="control-label" for="selectError">Naziv paketa</label>
							<div class="controls">
							  <select name="ID_pa" onchange="showPaket(this.value)" data-rel="chosen">
								<option selected="selected"> Odabir paketa</option>
									<?php
								        require('config.php');
										
								        $category = "SELECT ID_pa FROM paket";
								        $query_result = mysql_query($category);
								        while($result = mysql_fetch_assoc($query_result))
								        {
								        ?>
								            <option value = "<?php echo $result['ID_pa']?>"><?php echo $result['ID_pa']?></option>
								        <?php
								        }
								    ?>  
							  </select>
							</div>
						  </div>
						  
						  <div class="control-group">
							<label class="control-label" for="selectError">Odabir članarine</label>
							<div class="controls">
							  <select name="ID_cl" onchange="showClanarina(this.value)" data-rel="chosen">
								<option selected="selected"> Odabir Članarina</option>
									<?php
								        require('config.php');
										
								        $category = "SELECT ID_cl FROM clanarina";
								        $query_result = mysql_query($category);
								        while($result = mysql_fetch_assoc($query_result))
								        {
								        ?>
								            <option value = "<?php echo $result['ID_cl']?>"><?php echo $result['ID_cl']?></option>
								        <?php
								        }
								    ?>  
							  </select>
							</div>
						  </div>
							
							<!--
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Textarea WYSIWYG</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3"></textarea>
							  </div>
							</div>
							-->
							
							
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Dodaj klijenta</button>
							  <button type="reset" class="btn">Odustani</button>
							</div>
							
						  </fieldset>
						</form>   
						
						
					</div>
				</div><!--/span-->

			</div><!--/row-->
			
			
			
			<!--Forma za unos čvora-->
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Unos novog čvora</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<!--action="odaberiMjesto.php"  method="POST"-->
						<form class="form-horizontal" action="insertNode.php"  method="post">
						  <fieldset>
							  
						
							<h2>Podaci o čvoru</h2>
							<div class="control-group">
							  <label class="control-label" for="typeahead">ID </label>
							  <div class="controls">
								<input type="text" minlenght="1" maxlength="25" class="span2 typeahead" name="ID_cvor" data-provide="typeahead" >
									<span class="help-block with-errors">Najviše 25 znamenki.</span>
							  </div>
							</div>
							
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Max. broj podržanih korisnika </label>
							  <div class="controls">
								<input type="text" pattern="^([_0-9]){1,}$" minlenght="1" maxlength="5" class="span2 typeahead" name="maxBrojPodrzanihKorisnika"  data-provide="typeahead" >
							  </div>
							</div>
							
							<!--
							<div class="control-group">
							  <label class="control-label" for="typeahead">Poštanski broj </label>
							  <div class="controls">
								<input type="text" class="span2 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["40311", "47220"]'>
							  </div>
							</div>
							-->
							
							<div class="control-group">
								<label class="control-label" for="selectError">Postavljen </label>
								<div class="controls">
								  <select name="mjesto" onchange="showMjesto(this.value)" data-rel="chosen">
									<option selected="selected"> Odabir mjesta</option>
										<?php
									        require('config.php');
											
									        $category = "SELECT nazivMjesto FROM mjesto";
									        $query_result = mysql_query($category);
									        while($result = mysql_fetch_assoc($query_result))
									        {
									        ?>
									            <option value = "<?php echo $result['nazivMjesto']?>"><?php echo $result['nazivMjesto']?></option>
									        <?php
									        }
									
									    ?>  
								  </select>
								</div>
							  </div>
							  
							  
							  
							          
							
							<!--
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Textarea WYSIWYG</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3"></textarea>
							  </div>
							</div>
							-->
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Dodaj čvor</button>
							  <button type="reset" class="btn">Odustani</button>
							</div>
							
						  </fieldset>
						</form>   
						
						
					</div>
				</div><!--/span-->

			</div><!--/row-->
			
			<!--Forma za unos paketa-->
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Unos novog paketa</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						
						<form class="form-horizontal" action="insertPacket.php" method="post">
						  <fieldset>
							  
							<h2>Podaci o paketu</h2>
							<div class="control-group">
							  <label class="control-label" for="typeahead">ID </label>
							  <div class="controls">
								<input type="text"  minlenght="1" maxlength="25" class="span2 typeahead" name="ID_pa" data-provide="typeahead" >
									<span class="help-block with-errors">Najviše 25 znamenki.</span>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Cijena </label>
							  <div class="controls">
								<input type="text" pattern="^([_0-9]){1,}$" minlenght="1" maxlength="5" class="span2 typeahead" name="cijena_pa"  data-provide="typeahead" >
							  </div>
							</div>
							
							
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Oprema uz paket</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="oprema_pa"  data-provide="typeahead"></textarea>
							  </div>
							</div>
							
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Dodaj paket</button>
							  <button type="reset" class="btn">Odustani</button>
							</div>
							
						  </fieldset>
						</form>   
						
						
					</div>
				</div><!--/span-->

			</div><!--/row-->
			
			<!--Forma za unos članarine-->
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Unos novoe članarine</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						
						<form class="form-horizontal" action="insertMembership.php" method="post">
						  <fieldset>
							  
							<h2>Podaci o članarini</h2>
							<div class="control-group">
							  <label class="control-label" for="typeahead">ID </label>
							  <div class="controls">
								<input type="text" minlenght="1" maxlength="25" class="span2 typeahead" name="ID_cl" data-provide="typeahead" >
									<span class="help-block with-errors">Najviše 25 znamenki.</span>
							  </div>
							</div>
							
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Cijena </label>
							  <div class="controls">
								<input type="text" pattern="^([_0-9, .-.]){1,}$" minlenght="1" maxlength="45" class="span2 typeahead" name="cijena_cl"  data-provide="typeahead" >
							  </div>
							</div>
							
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Oprema uz paket</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="opis_cl"  data-provide="typeahead"></textarea>
							  </div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Dodaj članarinu</button>
							  <button type="reset" class="btn">Odustani</button>
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
	<!-- end: JavaScript-->
	
</body>
</html>
