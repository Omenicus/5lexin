<?php
/**
 * Aalborg theme navbar
 * 
 */

// drop-down login
if(elgg_in_context('compgroup')) return;
echo elgg_view('core/account/login_dropdown');

?>
<?php if (!elgg_is_logged_in()) { ?>
<div style="position: relative;float:right;right:64px;top: 0;z-index: 100;">
 <a href="<?php echo elgg_get_site_url();?>register" style="padding: 14px 18px;background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    border-radius: 0;
    box-shadow: none;
    color: #FFFFFF;
    display: block;
    margin-left: 0;
    position: relative;
    text-decoration: none;"><?php echo elgg_echo('register'); ?> </a>
</div>
<?php } ?>
<a class="elgg-button-nav" rel="toggle" href=".elgg-nav-collapse">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>

<div class="elgg-nav-collapse">
	<?php if (true)//elgg_is_logged_in()) 
  echo elgg_view_menu('site',array('class'=>'hide')); 
  else{
      
  ?>
  <div class="hide" style="float:left;">
  <?php  echo elgg_view_menu('site');  ?>
  </div>
  <div style="position: relative;float:left;top: 0;z-index: 100;">
  
  <span style="padding: 14px 0px;background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    border-radius: 0;
    box-shadow: none;
    color: #FFFFFF;
    display: block;
    margin-left: 0;
    position: relative;
    text-decoration: none;"><?php echo (elgg_get_site_entity()->name).elgg_echo('lexin:subtitle'); ?> </span>
  </div>

  <?php
  }
  ?>
</div>
