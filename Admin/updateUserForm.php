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
	
			


<!--Forma za unos klijenata-->
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Ažuriranje korisnika</h2>
						
					</div>
					<div class="box-content">
						
						<form class="form-horizontal" action="updateUser.php" method="GET" method="POST" action="odaberiMjesto.php" method="post">
						  <fieldset>
							  
							<div class="control-group">
								<label class="control-label">ID korisnika</label>
									<div class="controls">
								<input type="text" pattern="^([_A-ž]){3,}$" minlenght="1" maxlength="45" class="span2 typeahead" name="ID_us" value="<?php echo $_GET['upD']; ?>" data-provide="typeahead" readonly>
								</div>
							</div>
							
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Ime </label>
							  <div class="controls">
								<input type="text" pattern="^([_A-ž]){3,}$" minlenght="1" maxlength="45" class="span2 typeahead" name="ime_us" value="<?php echo $_GET['upD2']; ?>" data-provide="typeahead" >
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Prezime </label>
							  <div class="controls">
								<input type="text" pattern="^([_A-ž]){3,}$" minlenght="1" maxlength="45" class="span2 typeahead" name="prezime_us" value="<?php echo $_GET['upD3']; ?>" data-provide="typeahead" >
							  </div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="selectError">Mjesto stanovanja</label>
								<div class="controls">
								  <select name="mjesto" onchange="showMjesto(this.value)" data-rel="chosen">
									<option selected="selected"> <?php echo $_GET['upD4']; ?></option>
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
								<input type="text" pattern="^([_A-ž, 0-9]){3,}$" minlenght="1" maxlength="45" class="span2 typeahead" name="adresa" value="<?php echo $_GET['upD5']; ?>" data-provide="typeahead" >
							  </div>
							</div>
							
							  
							 <div class="control-group">
							  <label class="control-label" for="typeahead">Staro korisničko ime </label>
							  <div class="controls">
								<input type="text" pattern="^([_A-ž, 0-9]){3,}$" minlenght="1" maxlength="45" class="span2 typeahead" name="stari_naziv_pro" value="<?php echo $_GET['upD6']; ?>" data-provide="typeahead" readonly >
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Novo korisničko ime </label>
							  <div class="controls">
								<input type="text" pattern="^([_A-ž, 0-9]){3,}$" minlenght="1" maxlength="45" class="span2 typeahead" name="naziv_pro" value="<?php echo $_GET['upD6']; ?>" data-provide="typeahead" >
							  </div>
							</div>
							
							<div class="control-group">
							<label class="control-label" for="selectError">Naziv paketa</label>
							<div class="controls">
							  <select name="ID_pa" onchange="showPaket(this.value)" data-rel="chosen">
								<option selected="selected"> <?php echo $_GET['upD7']; ?> </option>
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
								<option selected="selected"> <?php echo $_GET['upD8']; ?> </option>
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
						  
						  
							  
							  
							  <div class="control-group">
								<label class="control-label" for="selectError">Vrsta profila</label>
								<div class="controls">
								  <select name="vrsta_profila" onchange="showCvor(this.value)" data-rel="chosen">
									<option selected="selected"> <?php echo $_GET['upD9']; ?></option>
										<?php
									        require('config.php');
											
									        $category = "SELECT vrsta_pro FROM ima_profil";
									        $query_result = mysql_query($category);
									        while($result = mysql_fetch_assoc($query_result))
									        {
									        ?>
									            <option value = "<?php echo $result['vrsta_pro']?>"><?php echo $result['vrsta_pro']?></option>
									        <?php
									        }
									    ?>  
								  </select>
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label">Stari cvor</label>
									<div class="controls">
								<input type="text" pattern="^([_A-ž]){3,}$" minlenght="1" maxlength="45" class="span2 typeahead" name="ID_cvor_stari" value="<?php echo $_GET['upD10']; ?>" data-provide="typeahead" readonly>
								</div>
							</div>
							  
							  <div class="control-group">
								<label class="control-label" for="selectError">Spojen na</label>
								<div class="controls">
								  <select name="ID_cvor" onchange="showCvor(this.value)" data-rel="chosen" readonly>
									<option selected="selected"> <?php echo $_GET['upD10']; ?></option>
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
							  
							  
						
						
							
							
						   
							
							<!--
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Textarea WYSIWYG</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3"></textarea>
							  </div>
							</div>
							-->
							
							
							
							<div class="form-actions">
							  <button type="submit" name="update" class="btn btn-primary">Spremi promjene</button>
							  <button type="reset" class="btn">Odustani</button>
							</div>
							
						  </fieldset>
						</form>   
						
						
					</div>
				</div><!--/span-->

			</div><!--/row-->
			
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
			
	
</body>
</html>