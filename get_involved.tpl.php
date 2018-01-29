<?php
$first_image = theme_get_setting('involved_1_image');
$second_image = theme_get_setting('involved_2_image');
$third_image = theme_get_setting('involved_3_image');
?>
<div class="grid get-involved">
    <div class="has-4-modules">
        <img src="<?php echo $directory . '/images/' . $first_image ?>" alt="" class="meetup">
        <h5><?php print $involved_1; ?></h5>
        <p><?php print $involved_1_body; ?></p>
        <a href="<?php print $involved_1_url; ?>" class="is-hollow">Meetup Group</a>
    </div>
    <div class="has-4-modules">
        <img src="<?php echo $directory . '/images/' . $second_image ?>" alt="">
        <h5><?php print $involved_2; ?></h5>
        <p><?php print $involved_2_body; ?></p>
        <a href="<?php print $involved_2_url; ?>" class="is-hollow">Slack Group</a>
    </div>
    <div class="has-4-modules">
        <img src="<?php echo $directory . '/images/' . $third_image ?>" alt="">
        <h5><?php print $involved_3; ?></h5>
        <p><?php print $involved_3_body; ?></p>
        <a href="<?php print $involved_2_url; ?>" class="is-hollow">Google Group</a>
    </div>
</div>