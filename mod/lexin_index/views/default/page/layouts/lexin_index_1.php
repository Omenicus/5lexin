<?php
/**
 * Elgg custom index layout
 * 
 * You can edit the layout of this page with your own layout and style. 
 * Whatever you put in this view will appear on the front page of your site.
 * 
 */

elgg_load_css('lexin_index_css');
$mod_params = array('class' => 'elgg-module-highlight');

?>

<div class="custom-index elgg-main elgg-grid clearfix">

	<div class="elgg-col elgg-col-1of3 custom-index-col2">
		<div class="elgg-inner pvm">
<?php
// right column
// Top box for login or welcome message
if (elgg_is_logged_in()) {
	$top_box = "<h2>" . elgg_echo("welcome") . " ";
	$top_box .= elgg_get_logged_in_user_entity()->name;
	$top_box .= "</h2>";
} else {
	$top_box = $vars['login'];
}
echo elgg_view_module('featured',  '', $top_box, $mod_params);

?>
		</div>
	</div>
  	<div class="elgg-col elgg-col-1of2 custom-index-col1">
  		<div class="elgg-inner pvm">
      <?php
      // left column
      
      
      ?>
		</div>
	</div>
</div>
<script type="text/javascript">
//$('.elgg-page')[0].css("background-image","_graphics/index/1.jpg)");// url("+image[n]+")");
var index=parseInt(Math.random()*4+1);
$('.elgg-page-body').css("background-image",'url(mod/lexin_theme/graphics/index/'+index+'-s.jpg)');//"_graphics/index/1.jpg)");
</script>