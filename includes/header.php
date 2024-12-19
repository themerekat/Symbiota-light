<script>
<!--
if (top.frames.length!=0)
  top.location=self.document.location;
// -->
</script>
<table id="maintable" cellspacing="0">
	<tr>
		<td id="header" colspan="3">
			<div style="clear:both; height:126px; border-bottom:1px solid #000000;">
				<div style="float:left">
					<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/header.jpg" />
				</div>
			</div>
			<div id="top_navbar">
				<div id="right_navbarlinks">
					<?php
					if($USER_DISPLAY_NAME){
						?>
						<span style="">
							Welcome <?php echo $USER_DISPLAY_NAME; ?>!
						</span>
						<span style="white-space: nowrap;" class="button button-tertiary bottom-breathing-room-rel">
							<a href="<?= $CLIENT_ROOT ?>/profile/viewprofile.php"><?= $LANG['H_MY_PROFILE'] ?></a>
						</span>
						<span style="white-space: nowrap;" class="button button-secondary bottom-breathing-room-rel">
							<a href="<?= $CLIENT_ROOT ?>/profile/index.php?submit=logout"><?= $LANG['H_LOGOUT'] ?></a>
						</span>
						<?php
					}
					else{
						?>
						<span class="button button-secondary">
							<a href="<?= $CLIENT_ROOT . "/profile/index.php?refurl=" . htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
								<?= $LANG['H_LOGIN'] ?>
							</a>
						</span>
						<?php
					}
					?>
					<span style="margin-left:5px;margin-right:5px;">
						<a href='<?php echo $CLIENT_ROOT; ?>/sitemap.php'>Sitemap</a>
					</span>
				</div>
				<ul id="hor_dropdown">
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/index.php" >Home</a>
					</li>
					<li>
						<a href="#" >Search</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php" >Search Collections</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank">Map Search</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist" ><?php echo (isset($LANG['H_DYN_LISTS'])?$LANG['H_DYN_LISTS']:'Dynamic Species List'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/exsiccati/index.php" >Exsiccati</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/taxa/taxonomy/taxonomydynamicdisplay.php" ><?php echo (isset($LANG['H_TAXONOMIC_EXPLORER'])?$LANG['H_TAXONOMIC_EXPLORER']:'Taxonomic Explorer'); ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" >Images</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/index.php" >Image Browser</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php" >Search Images</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=1" ><?php echo (isset($LANG['H_INVENTORIES'])?$LANG['H_INVENTORIES']:'Species Checklists'); ?></a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=1"><?php echo (isset($LANG['H_NORTH_AMER'])?$LANG['H_NORTH_AMER']:'North America'); ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/collections/specprocessor/crowdsource/index.php" >Crowdsource</a>
					</li>
					<li>
						<a href="#" ><?php echo (isset($LANG['H_CONTACTS'])?$LANG['H_CONTACTS']:'Contacts'); ?></a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/misc/collprofiles.php" ><?php echo (isset($LANG['H_PARTNERS'])?$LANG['H_PARTNERS']:'Partners'); ?></a>
							</li>
							<!--
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/misc/contacts.php" ><?php echo (isset($LANG['H_CONTACTS'])?$LANG['H_CONTACTS']:'Contacts'); ?></a>
							</li>
							-->
						</ul>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/misc/acknowledgements.php" >Acknowledgements</a>
					</li>
				</ul>
			</div>
		</td>
	</tr>
	<tr>
		<td id='middlecenter'  colspan="3">
