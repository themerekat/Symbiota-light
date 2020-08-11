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
    if(file_exists($SERVER_ROOT.'/includes/head.php')){
      include_once($SERVER_ROOT.'/includes/head.php');
    }
    else{
      echo '<link href="'.$CLIENT_ROOT.'/css/jquery-ui.css" type="text/css" rel="stylesheet" />';
      echo '<link href="'.$CLIENT_ROOT.'/css/base.css?ver=1" type="text/css" rel="stylesheet" />';
      echo '<link href="'.$CLIENT_ROOT.'/css/main.css?ver=1" type="text/css" rel="stylesheet" />';
    }
	?>
	<link href="css/quicksearch.css" type="text/css" rel="Stylesheet" />
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<script type="text/javascript">
		<?php include_once($SERVER_ROOT.'/includes/googleanalytics.php'); ?>
	</script>
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
		<h1></h1>

		<div style="padding: 0px 10px;">


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
