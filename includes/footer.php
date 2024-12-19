<footer>
	<div class="logo-gallery">
		<?php
		//include($SERVER_ROOT . '/accessibility/module.php');
		?>
		<a href="$SERVER_ROOT"  title="Pteridophyte Collections Consortium" >
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/PCC.png"  alt="Pteridophyte Collections Consortium" />
		</a>
		<a href="https://www.nsf.gov" target="_blank" aria-label="<?= $LANG['F_VISIT_NSF'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo_nsf.gif" alt="<?= $LANG['F_NSF_LOGO'] ?>" />
		</a>
		<a href="http://idigbio.org" target="_blank" title="iDigBio" aria-label="<?= $LANG['F_VISIT_IDIGBIO'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo_idig.png" alt="<?= $LANG['F_IDIGBIO_LOGO'] ?>" />
		</a>
		<a href="https://biokic.asu.edu" target="_blank" title="<?= $LANG['F_BIOKIC'] ?>" aria-label="Visit BioKIC website">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo-asu-biokic.png"  alt="<?= $LANG['F_BIOKIC_LOGO'] ?>" />
		</a>
	</div>
	<p>
		The PCC, and this data portal, were made possible by funding from the National Science Foundation’s
		Advancing Digitization of Biological Collections (ADBC) program, grant numbers
		<a href="http://www.nsf.gov/awardsearch/showAward?AWD_ID=1802504&HistoricalAwards=false" target="_blank">1802504</a>,
		<a href="http://www.nsf.gov/awardsearch/showAward?AWD_ID=1802352&HistoricalAwards=false" target="_blank">1802352</a>,
		<a href="http://www.nsf.gov/awardsearch/showAward?AWD_ID=1802134&HistoricalAwards=false" target="_blank">1802134</a>,
		<a href="http://www.nsf.gov/awardsearch/showAward?AWD_ID=1802033&HistoricalAwards=false" target="_blank">1802033</a>,
		<a href="http://www.nsf.gov/awardsearch/showAward?AWD_ID=1802270&HistoricalAwards=false" target="_blank">1802270</a>,
		<a href="http://www.nsf.gov/awardsearch/showAward?AWD_ID=1802255&HistoricalAwards=false" target="_blank">1802255</a>,
		<a href="http://www.nsf.gov/awardsearch/showAward?AWD_ID=1802239&HistoricalAwards=false" target="_blank">1802239</a>,
		<a href="http://www.nsf.gov/awardsearch/showAward?AWD_ID=1802446&HistoricalAwards=false" target="_blank">1802446</a>,
		<a href="http://www.nsf.gov/awardsearch/showAward?AWD_ID=1802305&HistoricalAwards=false" target="_blank">1802305</a>.
	</p>
	<p>
		The pteridoportal taxonomic thesaurus is based on the
		<a href="https://worldplants.webarchiv.kit.edu/ferns/" target="_blank">Checklist of Ferns and Lycophytes of the World</a>, generously provided by Michael Hassler.
	</p>
	<p>
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
</footer>
	