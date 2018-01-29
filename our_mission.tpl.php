<?php
$first_image = theme_get_setting('mission_1_image');
$second_image = theme_get_setting('mission_2_image');
$third_image = theme_get_setting('mission_3_image');
?>
<div class="our-mission">
<?php print $mission_body ;?>
        <div class="grid">
            <div class="has-4-modules">
                <div class="card">
                    <div class="circle center-elem pull-up">
                        <img src="<?php echo  $directory . '/images/' . $first_image ?>" alt="">
                    </div>
                    <h5>we help charities</h5>
                    <p><?php print $mission_1 ;?></p>
                </div>
            </div>
            <div class="has-4-modules">
                <div class="card">
                    <div class="circle center-elem pull-up">
                        <img src="<?php echo $directory . '/images/' . $second_image ?>" alt="">
                    </div>
                    <h5>We bring together</h5>
                    <p><?php print $mission_2 ;?></p>
                </div>
            </div>
            <div class="has-4-modules">
                <div class="card">
                    <div class="circle center-elem pull-up">
                        <img src="<?php echo $directory . '/images/' . $third_image ?>" alt="">
                    </div>
                    <h5>We encourage</h5>
                    <p><?php print $mission_3 ;?></p>
                </div>
            </div>
        </div>
</div>