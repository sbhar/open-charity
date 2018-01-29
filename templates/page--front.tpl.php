<?php 
$nodes = entity_load('node');// loading nodes data
/*print '<pre>';
print_r($nodes);
print '</pre><br class="clearfix"/>';*/
?>

<?php  

$Logo = theme_get_setting('Logo');


?>




  



<header id="header">
        <div class="is-contained">
            <a href="/drupal" id="logo" class="header-item">
            <meta name="Logo" content="Open Charity">
                <img src="<?php echo  $directory . '/images/' . $Logo ?>" alt="Open Charity">
            </a>
            <div class="header-item">
                <span id="ham" class="ham">Menu</span>
            </div>
        <span class="header-item">
        <?php  print l("Join Us", "https://www.meetup.com/Open-Charity/", array('attributes' => array('class' => 'is-hollow'))); ?>
        </span>

        <?php print theme('oc_links', array('links' => $main_menu, 'attributes' => array('id' => 'nav', 'class' => array('main-navigation')) )); ?>
        </div>
    </header>

    <section class="openWindow" id="window">
        <div class="is-contained">
            <?php  print render($page['window']); ?>
        </div>
    </section>
    <?php // if (! empty($event_date)) : ?>
        <section class="wash">
            <div class="is-contained">
                <?php  print render($page['event']); ?>
            </div>
        </section>
    <?php // endif ; ?>
     <section class="section">
        <div class="is-contained">
            <?php  print render($page['get_involved']); ?>
        </div>
    </section>
    <section class="wash section" id="about">
        <div class="is-contained">
        <?php  print render($page['mission']); ?>
        <div class="divider gray"></div>
        </div>
    </section>
    
    <section class="section wash">
        <div class="is-contained">
            <?php  print render($page['members']); ?>
        </div>
    </section>

    <section class="section blog slider">
    <div class="is-contained">
		<h4>Blog</h4>
        <div id="carousel" class="owl-carousel owl-theme">
		
		<?php
		if($nodes) {
			foreach ($nodes as $node) {
				
				$vars = get_object_vars ( $node );
				$time = $vars['created'];
				$FormatForView = date("d/m/Y", $time);
				$dt = DateTime::createFromFormat('!d/m/Y', $FormatForView);
				$myFormatForView = $dt->format('j M Y');
			
			
				echo "<div class=excerpt item>
					<p class=title><a href=node/".$vars['nid'].">".$vars['title']."</a></p>
					<p class=bodyvalue>".$vars['body']['und'][0]['value']."</p>
					<span class=date-time>".$myFormatForView."</span></div>";
				
			}
		}
		?>
		</div>
		<button class="chevron prev">Previous</button>
        <button class="chevron next">Next</button>
    </div>
    </section>
    <footer class="">
        <div class="is-contained">
            <?php print render($page['social_footer']); ?>                
            <span class="divider dark"></span>
            <?php print render($page['footer']); ?>                
        </div>
    </footer>
