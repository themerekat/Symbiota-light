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
	include_once($SERVER_ROOT.'/includes/googleanalytics.php');
	?>
	<link href="css/quicksearch.css" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<style>
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
		<h1><center>Bee Library for Bee Specimens, Images and Traits</center></h1>
		<div id="quicksearchdiv">
			<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
			<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
				<div id="quicksearchtext" ><?php echo (isset($LANG['QSEARCH_SEARCH'])?$LANG['QSEARCH_SEARCH']:'Taxon Search'); ?></div>
				<input id="taxa" type="text" name="taxon" />
				<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms"><?php echo (isset($LANG['QSEARCH_SEARCH_BUTTON'])?$LANG['QSEARCH_SEARCH_BUTTON']:'Search'); ?></button>
			</form>
	</div>
		<div style="padding: 0px 10px;float:left;">
			Bees are critical to sustaining a large proportion of global food production, as well as pollinating both wild and cultivated plants. They are decreasing in both numbers and diversity and our understanding of the factors driving these declines is limited, in part, because we lack sufficient data on the distribution of bee species to predict changes in their geographic range under climate change scenarios. Additionally lacking is adequate data on the behavioral and anatomical traits that may make bees either vulnerable or resilient to human-induced environmental changes. Fortunately, a wealth of associated attributes can be extracted from the specimens deposited in natural history collections. Extending Anthophila Research Through Image and Trait Digitization (Big-Bee) is a newly funded US National Science Foundation Advancing Digitization of Biodiversity Collections project. Big-Bee will advance research on bee ecology and taxonomy through the creation and standardization of open datasets for taxonomic and computational analysis. It will overcome challenges in bee identification and discovery by linking ecological and anatomical traits. The project will supply innovative methods for deep digitization of target taxa, including high-resolution imaging methods. These image data will enable the scoring of life-history traits and will facilitate identification from digitized specimens. Big-Bee will further revolutionize processes of insect specimen digitization by enabling global bee data to be integrated and linked. The project will produce important partnerships between researchers, industry, and government agencies.
		</div>
	</div>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
</body>
</html>