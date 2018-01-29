<header id="header">

        <div class="is-contained">

            <a href="/drupal" id="logo" class="header-item">

            <meta name="Logo" content="Open Charity">

                <img src="<?php echo  base_path(). $directory . '/images/open_charity_logo.svg'?>" alt="Open Charity">

            </a>

            <div class="header-item">

        <?php  print l("Join Us", "https://www.meetup.com/Open-Charity/", array('attributes' => array('class' => 'is-hollow'))); ?>
		<span id="ham" class="ham">Menu</span>
        </div>

        <?php print theme('oc_links', array('links' => $main_menu, 'attributes' => array('id' => 'nav', 'class' => array('main-navigation')) )); ?>
        </div>

    </header>
	<div class="wrapper">
	<div class="breadcrumbsx wash">
    <div class="is-contained">

        <?php if ($breadcrumb): ?>

        <div id="breadcrumb" style="clear:both"><?php print $breadcrumb; ?></div>

        <?php endif; ?>

           

        <?php print $messages; ?>



    </div>
	<div class="divider take-20"></div>
	</div>



    <div id="main" class="is-contained">



      <div id="content" class="grid">
	  
		<?php if (($page['sidebar_first']) || ($page['sidebar_second'])) { ?>
		
            <div class="has-8-modules">
			
		<?php } else { ?>
			
			<div class="has-12-modules">
			
		<?php }	?>

                <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>

                <a id="main-content"></a>

                <?php print render($title_prefix); ?>

                <?php if ($is_article || $is_page): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>

                <?php print render($title_suffix); ?>

                <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>

                <?php print render($page['help']); ?>

                <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

                <?php print render($page['content']); ?>

                <?php print $feed_icons; ?>

            </div>



      <?php if ($page['sidebar_first']): ?>

        <div class="has-4-modules">

          <?php print render($page['sidebar_first']); ?>

        </div> <!-- /.section, /#sidebar-first -->

      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>

        <div class="has-4-modules">

          <?php print render($page['sidebar_second']); ?>

        </div>

      <?php endif; ?>

    </div>

   </div>
   <div class="push"></div>
</div>

			
	<footer class="white-space">
			
		


        <div class="is-contained">

            <?php print render($page['social_footer']); ?>                

            <span class="divider dark"></span>

            <?php print render($page['footer']); ?>                

        </div>

    </footer>

