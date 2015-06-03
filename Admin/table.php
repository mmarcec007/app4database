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
				<li><a href="#">Tables</a></li>
			</ul>
			
			<!--Tablica članova-->
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Članovi</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Ime</th>
								  <th>Prezime</th>
								  <th>Mjesto</th>
								  <th>Adresa</th>
								  <th>Korisničko ime</th>
								  <th>Vrsta profila</th>
								  <th>Status profila</th>
								  <th>Članarina</th>
								  <th>Paket</th>
								  <th>Spojen na</th>
								  <th>Upravljanje</th>
							  </tr>
						  </thead>   
						  <tbody>
							  <!--
							
								<td>Dennis Ji</td>
								<td class="center">2012/01/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								
							<tr>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							-->
								<?php
									$servername = "localhost";
									$username = "root";
									$password = "cobrax01";
									$dbname = "mark_mtpanel";
									
									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
									    die("Connection failed: " . $conn->connect_error);
									} 
									
									$sql = "SELECT user.ID_us, user.ime_us, user.prezime_us, boraviu.nazivMjesto, boraviu.adresa,ima_profil.naziv_pro, ima_profil.statusProfila, ima_profil.vrsta_pro, jeSpojen.ID_cvor, je_platio.ID_cl, je_platio.ID_pa 
									FROM user 
									INNER JOIN ima_profil ON user.ID_us = ima_profil.ID_us
									INNER JOIN boraviu ON user.ID_us = boraviu.ID_us
									INNER JOIN jeSpojen ON user.ID_us = jeSpojen.ID_us
									INNER JOIN je_platio ON user.ID_us = je_platio.ID_us";
									$result = $conn->query($sql);
									
									if ($result->num_rows > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_array($result)) {
											echo "<tr>";
											
											echo "<td>" . $row['ime_us'] . "</td>";
											echo "<td>" . $row['prezime_us'] . "</td>";
											echo "<td>" . $row['nazivMjesto'] . "</td>";
											echo "<td>" . $row['adresa'] . "</td>";
											echo "<td>" . $row['naziv_pro'] . "</td>";
											echo "<td>" . $row['vrsta_pro'] . "</td>";
											echo  "<td>" . $row['statusProfila'] . "</td>";
											echo "<td>" . $row['ID_cl'] . "</td>";
											echo  "<td>" . $row['ID_pa'] . "</td>";
											echo "<td>" . $row['ID_cvor'] . "</td>";
											/*
											echo '<td class="center">
												<a class="btn btn-success" href="#">
													<i class="halflings-icon white zoom-in"></i>  
												</a>
												<a class="btn btn-info" href="#">
													<i class="halflings-icon white edit"></i>  
												</a>
												<a class="btn btn-danger" name="delete" href=\"deleteUser.php?id=$row[ID_us]\"; ?>
													<i class="halflings-icon white trash"></i> 
												</a>
												
												<a class="btn btn-warning" href="#">
													<i class="halflings-icon pause"></i> 
												</a>
												
												<a class="btn btn-success" href="#">
													<i class="halflings-icon play"></i> 
												</a>
											</td>';
											echo "</tr>";, del2=$row[naziv_pro]
											// echo '<td><input type="submit" name="deleteItem" value=Izbriši /> <input type="submit" name="updateItem" value=Ažuriraj /> </td>"';
											*/
											echo"<td> <a class=btn btn-danger href='deleteUser.php?del=$row[ID_us]&del2=$row[naziv_pro]&del3=$row[ID_cvor]'>Obriši</a> <a class=btn btn-danger href='updateUserForm.php?upD=$row[ID_us]&upD2=$row[ime_us]&upD3=$row[prezime_us]&upD4=$row[nazivMjesto]
											&upD5=$row[adresa]&upD6=$row[naziv_pro]&upD7=$row[ID_pa]&upD8=$row[ID_cl]&upD9=$row[vrsta_pro]&upD10=$row[ID_cvor]'>Ažuriraj </a> 
											<a class=btn btn-danger href='blockUser.php?ID_ToBlock=$row[ID_us]'>Blokiraj </a> <a class=btn btn-danger href='activateUser.php?ID_ToActivate=$row[ID_us]'>Aktiviraj </a> </td>";
											
											echo "</tr>";
										}
										
									} else {
									    echo "0 results";
									}
									$conn->close();
									
									// korisnici za test, mjesta, tehničeri - dodati radni nalog,
								?>
								
							
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Uplate</h2>
						<div class="box-icon">
							
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <thead>
								  <tr>
									  <th>Ime</th>
									  <th>Prezime</th>
									  <th>Paket</th>
									  <th>Datum aktiviranja</th>
									  <th>Rok uplate</th>                                  
									  <th>Status uplate</th>
								  </tr>
							  </thead>   
							  <tbody>
								<?php
									$servername = "localhost";
									$username = "root";
									$password = "cobrax01";
									$dbname = "mark_mtpanel";
									
									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
									    die("Connection failed: " . $conn->connect_error);
									} 
									
									$sql = "SELECT user.ime_us, user.prezime_us, je_narucio.ID_pa, je_narucio.datum_aktiviranja_pa, je_platio.status_uplate, je_platio.rok_uplate 
									FROM user 
									INNER JOIN je_narucio ON user.ID_us = je_narucio.ID_us
									INNER JOIN je_platio ON user.ID_us = je_platio.ID_us";
									$result = $conn->query($sql);
									
									if ($result->num_rows > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_array($result)) {
											echo "<tr>";
											echo "<td>" . $row['ime_us'] . "</td>";
											echo "<td>" . $row['prezime_us'] . "</td>";
											echo "<td>" . $row['ID_pa'] . "</td>";
											echo "<td>" . $row['datum_aktiviranja_pa'] . "</td>";
											echo "<td>" . $row['rok_uplate'] . "</td>";
											echo "<td>" . $row['status_uplate'] . "</td>";
											
											/*
											echo '<td class="center">
												<a class="btn btn-danger" href="deleteUser.php?del=$row[ID_us]?>">
													<i class="halflings-icon white trash"></i> 
												</a>
											</td>';
											echo "</tr>";
											*/
											echo "</tr>";
											
										}
										
									} else {
									    echo "0 results";
									}
									$conn->close();
									
									// korisnici za test, mjesta, tehničeri - dodati radni nalog,
								?>                                   
							  </tbody>
						 </table>    
					</div>
				</div><!--/span-->
				
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Pristupne točke</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <thead>
								  <tr>
									  <th>Naziv čvora</th>
									  <th>Br. spojenih korisnika</th>
									  <th>MAX br. korisnika</th>
									  <th>Nalazi se</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
								<?php
									$servername = "localhost";
									$username = "root";
									$password = "cobrax01";
									$dbname = "mark_mtpanel";
									
									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
									    die("Connection failed: " . $conn->connect_error);
									} 
									
									$sql = "SELECT cvor.ID_cvor, cvor.brSpojenikKorisnika, cvor.maxBrojPodrzanihKorisnika, jepostavljen.nazivMjesto
											FROM cvor
											LEFT JOIN jepostavljen ON cvor.ID_cvor = jepostavljen.ID_cvor";
									$result = $conn->query($sql);
									
									if ($result->num_rows > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_array($result)) {
											echo "<tr>";
											echo "<td>" . $row['ID_cvor'] . "</td>";
											echo "<td>" . $row['brSpojenikKorisnika'] . "</td>";
											echo "<td>" . $row['maxBrojPodrzanihKorisnika'] . "</td>";
											echo "<td>" . $row['nazivMjesto'] . "</td>";
											
											/*
											echo '<td class="center">
												<a class="btn btn-danger" href="deleteUser.php?del=$row[ID_us]?>">
													<i class="halflings-icon white trash"></i> 
												</a>
											</td>';
											echo "</tr>";
											*/
											
											echo "</tr>";
											
											
										}
										
									} else {
									    echo "0 results";
									}
									$conn->close();
									
									// korisnici za test, mjesta, tehničeri - dodati radni nalog,
								?>
								                                   
							  </tbody>
						 </table>  
						 
					</div>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid sortable">	
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Profil korisnika</h2>
						<div class="box-icon">
							
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <thead>
								  <tr>
									  <th>Korisničko ime</th>
									  <th>Lozinka</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
								<?php
									$servername = "localhost";
									$username = "root";
									$password = "cobrax01";
									$dbname = "mark_mtpanel";
									
									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
									    die("Connection failed: " . $conn->connect_error);
									} 
									
									$sql = "SELECT * FROM profile";
									$result = $conn->query($sql);
									
									if ($result->num_rows > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_array($result)) {
											echo "<tr>";
											echo "<td>" . $row['naziv_pro'] . "</td>";
											echo "<td>" . $row['PW_pro'] . "</td>";
											
											/*
											echo '<td class="center">
												<a class="btn btn-danger" href="deleteUser.php?del=$row[ID_us]?>">
													<i class="halflings-icon white trash"></i> 
												</a>
											</td>';
											echo "</tr>";
											*/
											
											echo "</tr>";
											
											
										}
										
									} else {
									    echo "0 results";
									}
									$conn->close();
									
									// korisnici za test, mjesta, tehničeri - dodati radni nalog,
								?>                                   
							  </tbody>
						 </table>  
						      
					</div>
				</div><!--/span-->
				
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Raspoloživi paketi</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					
					<div class="box-content">
						<table class="table table-condensed">
							  <thead>
								  <tr>
									  <th>Naziv</th>
									  <th>Cijena</th>
									  <th>Oprema</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
								<?php
									$servername = "localhost";
									$username = "root";
									$password = "cobrax01";
									$dbname = "mark_mtpanel";
									
									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
									    die("Connection failed: " . $conn->connect_error);
									} 
									
									$sql = "SELECT * FROM paket";
									$result = $conn->query($sql);
									
									if ($result->num_rows > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_array($result)) {
											echo "<tr>";
											echo "<td>" . $row['ID_pa'] . "</td>";
											echo "<td>" . $row['cijena_pa'] . "</td>";
											echo "<td>" . $row['oprema_pa'] . "</td>";
											
											/*
											echo '<td class="center">
												<a class="btn btn-danger" href="deleteUser.php?del=$row[ID_us]?>">
													<i class="halflings-icon white trash"></i> 
												</a>
											</td>';
											echo "</tr>";
											*/
											
											echo "</tr>";
											
											
										}
										
									} else {
									    echo "0 results";
									}
									$conn->close();
									
									// korisnici za test, mjesta, tehničeri - dodati radni nalog,
								?>                                       
							  </tbody>
						 </table>  
						   
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
			<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>FAQ</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
									  <th>Username</th>
									  <th>Pitanje</th>
									  <th>Odgovor</th>                                      
								  </tr>
							  </thead>   
							  <tbody>
								<?php
									$servername = "localhost";
									$username = "root";
									$password = "cobrax01";
									$dbname = "mark_mtpanel";
									
									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
									    die("Connection failed: " . $conn->connect_error);
									} 
									
									$sql = "SELECT ima_profil.naziv_pro, user_faq.pitanje_faq, user_faq.odgovor_faq FROM user 
											INNER JOIN ima_profil ON user.ID_us = ima_profil.ID_us
											INNER JOIN user_faq ON user.ID_us = user_faq.ID_us;";
									
									$result = $conn->query($sql);
									
									if ($result->num_rows > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_array($result)) {
											echo "<tr>";
											echo "<td>" . $row['naziv_pro'] . "</td>";
											echo "<td>" . $row['pitanje_faq'] . "</td>";
											echo "<td>" . $row['odgovor_faq'] . "</td>";
											
											echo "<td> <a class=btn btn-danger href='answerForm.php?qusetion=$row[pitanje_faq]'>Odgovori </a> 
											<a class=btn btn-danger href='activateUser.php?ID_ToActivate=$row[pitanje_faq]'>Obriši </a> </td>";
											echo "</tr>";
											
											
										}
										
									} else {
									    echo "0 results";
									}
									$conn->close();
									
									// korisnici za test, mjesta, tehničeri - dodati radni nalog,
								?>                                 
							  </tbody>
						 </table>  
						 <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						  </ul>
						</div>     
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
