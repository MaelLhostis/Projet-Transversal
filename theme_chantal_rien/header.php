<!DOCTsYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<!-- Titre de la page qui vient des paramètres de wordpress -->
	<title><?php bloginfo('name'); ?></title>

	<!-- inclusion du fichier principal de style -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

	<!-- inclusion d'un autre fichier de style -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/w3.css">

	<script>
		window.onscroll = function() {headerDisplay();sideDisplay()};

		function headerDisplay() {
		    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
		        document.getElementById("primary-menu-pc").style.marginTop = -43;
		        document.getElementById("headerPc").style.height = 44;
		        document.getElementById("titlesMob").className = "diplayNone";
		        document.getElementById("coordonee").className = "diplayNone w3-display-topright";		        
		        document.getElementById("logoChantalRienSmall").className = "";
		        document.getElementById("logoChantalRienBig").className = "diplayNone";
		        document.getElementById("hrmob").className = "diplayNone";
		        
		    } else {
		        document.getElementById("primary-menu-pc").style.marginTop = 43;
		        document.getElementById("headerPc").style.height = 130;
		        document.getElementById("titlesMob").className = "";
		        document.getElementById("coordonee").className = "w3-display-topright";
		        document.getElementById("logoChantalRienBig").className = "";		        
		        document.getElementById("logoChantalRienSmall").className = "diplayNone";
		        document.getElementById("hrmob").className = "";
		    }
		}
		function sideDisplay() {
			
		    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {        
		        document.getElementById("side").className = "w3-container w3-card-2 diplayNone";        
		        
		    } else {
		        document.getElementById("side").className = "w3-container w3-card-2";
		        }
		}

		function myFunction(id) {
		    var x = document.getElementById(id);
		    if (x.className.indexOf("w3-show") == -1) {
		        x.className += " w3-show";
		    } else {
		        x.className = x.className.replace(" w3-show", "");
	    	}
		}

	</script>




</head>


<link href="https://fonts.googleapis.com/css?family=Lobster|Lobster+Two|Roboto|Tangerine" rel="stylesheet">

<body>
<div id="headPc">

<!--Début header large screen -->
	<div id="headerPc" class="w3-container w3-card-2">
		<div class="w3-third">
			<!--<p id="title1">Chantal RIEN Consultant</p>
			<p id="title2">Conseil Prevention et Santé</p>-->
			<?php 
				$image_url1='http://chantalrien.com/wp-content/uploads/2017/01/logoChantalRienBig-300x154.png';
			?>
			<img id="logoChantalRienBig" border="0" src="<?php echo $image_url1;?>">
			<?php 
				$image_url1='http://chantalrien.com/wp-content/uploads/2017/01/logoChantalRienSmall-300x126.png';
			?>
			<img id="logoChantalRienSmall" class="diplayNone" border="0" src="<?php echo $image_url1;?>">
		</div>
		<nav id="primary-menu-pc" class="w3-container w3-navbar w3-rest" role="navigation">	
			<?php dynamic_sidebar('my_custom_zone');?>		
			<?php 
				// inclusion du menu nommé menu1 dans l'administration
				wp_nav_menu(array('theme_location' => 'main_menu', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu-pc')); 
			?>			
		</nav>
	</div>
	<p id="coordonee" class="w3-display-topright"><i id="icon1" class="fa fa-mobile-phone"></i>06.56.24.75.98<i id="icon2" class="fa fa-at"></i> chantalrien@orange.fr</p>
	<!--<div id="side" class="w3-container w3-card-2">
		<table id="sideTable">
			<tr>
				<td><i id="icon1" class="fa fa-mobile-phone"></i></td>
				<td><p id="sideNum"> 06.56.24.75.98</p></td>
			</tr>
			<tr>
				<td><i id="icon2" class="fa fa-at"></i></td>
				<td><p id="sideMail"> chantalrien@orange.fr</p></td>
			</tr>
		</table>
	</div>-->	
</div>
<!--Fin header large screen -->

<!--Début header small screen -->
<div id="headMobile" class="w3-card-2">
	<div id="headerMobile">
		<div id="titlesMob">
			<!--<p id="title1mob">Chantal RIEN Consultant</p>
			<p id="title2mob">Conseil Prevention et Santé</p>-->
			<?php 
				$image_url1='http://chantalrien.com/wp-content/uploads/2017/01/logoChantalRienBig-300x154.png';
			?>
			<img id="logoChantalRienBigMob" border="0" src="<?php echo $image_url1;?>">			
		</div>
		<div>
		<hr id="hrmob" style="margin-bottom: 0px;border-color:#fff;">
		<button id="buttonMobile" onclick="myFunction('primary-menu-mobile')" class="w3-btn">
			Menu<i class="fa fa-bars w3-xlarge" style="margin-top: -31px;float: right;"></i>
		</button>	
		<nav id="primary-menu-mobile" class="w3-accordion-content" role="navigation">	
			<?php dynamic_sidebar('my_custom_zone');?>		
			<?php 
				// inclusion du menu nommé menu1 dans l'administration
				wp_nav_menu(array('theme_location' => 'main_menu', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu-mobile')); 
			?>			
		</nav>			
		</div>
	</div>
</div>

