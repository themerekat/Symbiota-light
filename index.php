<?php
include_once('config/symbini.php');
include_once('content/lang/index.'.$LANG_TAG.'.php');
header("Content-Type: text/html; charset=".$CHARSET);
?>
<html>
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	$activateJQuery = true;
	include_once($SERVER_ROOT.'/includes/head.php');
	?>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<script src="js/jquery.slides.js"></script>
	<script type="text/javascript">
		<?php include_once($SERVER_ROOT.'/includes/googleanalytics.php'); ?>
	</script>
	<style>
		#quicksearchdiv{
			width: 300px;
			height: 90px;
			margin: 8px auto;
			padding: 5px 5px 0px 5px;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border: 1px solid black;
		}

		#quicksearchtext{
		}

		#quicksearch input{
			width: 250px;
			float: left;
			margin-bottom:0px;
			padding-bottom:0px;
			font-family: Arial, Helvetica, sans-serif;
		}

		#quicksearchbutton{
			margin-left:10px;
			margin-top:5px;
			margin-bottom:0px;
			padding-bottom:0px;
		}
		#slideshowcontainer{
			border: 2px solid black;
			border-radius:10px;
			padding:10px;
			margin-left: auto;
			margin-right: auto;
		}
	</style>
</head>
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?>
	<!-- This is inner text! -->
	<div id="innertext">
		<h1></h1>
		<div style="padding: 0px 10px;">
			<div style="float:right;width:320px">
				<div id="quicksearchdiv">
					<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
					<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
						<div id="quicksearchtext" ><?php echo (isset($LANG['QSEARCH_SEARCH'])?$LANG['QSEARCH_SEARCH']:'Taxon Search'); ?></div>
						<input id="taxa" type="text" name="taxon" />
						<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms"><?php echo (isset($LANG['QSEARCH_SEARCH_BUTTON'])?$LANG['QSEARCH_SEARCH_BUTTON']:'Search'); ?></button>
					</form>
				</div>
				<div>
					<?php
					//---------------------------SLIDESHOW SETTINGS---------------------------------------
					//If more than one slideshow will be active, assign unique numerical ids for each slideshow.
					//If only one slideshow will be active, leave set to 1.
					$ssId = 1;

					//Enter number of images to be included in slideshow (minimum 5, maximum 10)
					$numSlides = 10;

					//Enter width of slideshow window (in pixels, minimum 275, maximum 800)
					$width = 300;

					//Enter amount of days between image refreshes of images
					$dayInterval = 7;

					//Enter amount of time (in milliseconds) between rotation of images
					$interval = 7000;

					//Enter checklist id, if you wish for images to be pulled from a checklist,
					//leave as 0 if you do not wish for images to come from a checklist
					//if you would like to use more than one checklist, separate their ids with a comma ex. "1,2,3,4"
					$clId = '1';

					//Enter field, specimen, or both to specify whether to use only field or specimen images, or both
					$imageType = 'field';

					//Enter number of days of most recent images that should be included
					$numDays = 30;

					//---------------------------DO NOT CHANGE BELOW HERE-----------------------------

					ini_set('max_execution_time', 120);
					include_once($SERVER_ROOT.'/classes/PluginsManager.php');
					$pluginManager = new PluginsManager();
					echo $pluginManager->createSlideShow($ssId,$numSlides,$width,$numDays,$imageType,$clId,$dayInterval,$interval);
					?>
				</div>
			</div>
			<p>Welcome to the data portal for the Pteridophyte Collections Consortium (PCC)! Pteridophytes (ferns, lycophytes,
			and their extinct seed-free relatives) are a diverse group of plants that today comprises approximately 12,000 species
			and plays a major role in terrestrial ecosystems. Pteridophytes were even more important in the past,
			especially before the evolution of the gymnosperms and the flowering plants.
			This group of land plants was the first to evolve roots and leaves, the first to colonize drier habitats, and the first to form forests.</p>

			<p>Historically, the research communities interested in living pteridophytes and those studying the fossil ones were
			largely separate from each other. The extant and fossil specimens were housed in different facilities (herbaria and
			paleontological museums, respectively) and their researchers often worked in different departments. The PCC was
			created to promote the integration of these communities by bringing together specimen data and associated
			resources for both living and fossil pteridophytes.</p>

			<p>This portal provides one-stop access to digitized fossil and herbarium pteridophyte specimens, and their associated data.
			Initially these data will be from the collections of our core 36  PCC member institutions.
			However, in the future we hope to include collections from new PCC-affiliated institutions, and to partner with other
			institutions worldwide to serve their data through the PCC portal.</p>

			<p>For more information about pteridophytes or the PCC, please visit our <a href=https://pteridophytes.berkeley.edu>PCC website</a> and follow us on Facebook and Twitter.</p>
		</div>
	</div>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
</body>
</html>
