  <div<?php print $content_attributes; ?>>
    <?php if ($breadcrumb): ?>
      <div id="breadcrumb" class="grid-8"><?php print $breadcrumb; ?></div>
    <?php endif; ?>
    <?php print $content; ?>
	<div class="grid-2 region region-dashboard-nav" id="region-dashboard-nav">
	  <div class="region-inner region-dashboard-nav-inner">
	      <nav class="navigation">
	      <h2>Dashboard</h2>
		 </nav>
		</div>
	</div>
<?php // Missing </DIV> is in zone--dashboard.tpl.php  ?>