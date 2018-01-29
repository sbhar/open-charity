<?php
$first_image = theme_get_setting('members_1_image');
$second_image = theme_get_setting('members_2_image');
$third_image = theme_get_setting('members_3_image');
$fourth_image = theme_get_setting('members_4_image');
$fifth_image = theme_get_setting('members_5_image');
?>
<div class="our-members">
<div class="slider owl-carousel" id="2x">
    <div class="slider-item item take-20">
        <img src="<?php echo $directory . '/images/' . $first_image ?>" alt="">
    </div>
    <div class="slider-item item take-20">
        <img src="<?php echo $directory . '/images/' . $second_image ?>" alt="">
    </div> 
	<div class="slider-item item take-20">
        <img src="<?php echo $directory . '/images/' . $third_image ?>" alt="">
    </div>
    <div class="slider-item item take-20">
        <img src="<?php echo $directory . '/images/' . $fourth_image ?>" alt="">
    </div>
   
    <div class="slider-item item take-20">
        <img src="<?php echo $directory . '/images/' . $fifth_image ?>" alt="">
    </div>
</div>
<div class="indicators center-elem">
    <div class="circle active"></div>
    <div class="circle"></div>
    <div class="circle"></div>
	<div class="circle"></div>
    <div class="circle"></div>
</div>
<div class="m-preview center">
<div id="screens_viewer_nav" >
<div class="slideshow-nav" >
<a class="prev nav-left" ><span class="hide-text" >Previous</span></a>
<a class="next nav-right" ><span class="hide-text">Next</span></a>
</div>
</div>
</div>
</div>