<?php
       /**
 * Resume
 *
 * @package Resume
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Pablo Borbón @ Consultora Nivel7 Ltda.
 * @copyright Consultora Nivel7 Ltda.
 * @link http://www.nivel7.net
 */

$site_url = elgg_get_site_url();

?>
<br/> 
<div class='resume_searchbox'>
	<?php echo elgg_echo('resume:search:work');?><br/>
	<form id="searchform" action="<?php echo $site_url;?>search/" method="get"/>
	<input type="text" name="q" value="<?php echo elgg_echo('resume:search:workdetail');?>" onclick="{this.value=''}" class="search_input"/>
	<input type="hidden" name="entity_subtype" value="rWork"/>
	<input type="hidden" name="entity_type" value="object"/>
	<input type="hidden" name="search_type" value="entities"/>
	<input type="submit" value="<?php echo elgg_echo('resume:search');?>" class="search_submit_button"/>
	</form>
</div><br/>

<div class='resume_searchbox'>
	<?php echo elgg_echo('resume:search:academic');?><br/>
	<form id="searchform" action="<?php echo $site_url;?>search/" method="get"/>
	<input type="text" name="q" value="<?php echo elgg_echo('resume:search:academicdetail');?>" onclick="{this.value=''}" class="search_input"/>
	<input type="hidden" name="entity_subtype" value="rEdu"/>
	<input type="hidden" name="entity_type" value="object"/>
	<input type="hidden" name="search_type" value="entities"/>
	<input type="submit" value="<?php echo elgg_echo('resume:search');?>" class="search_submit_button"/>
	</form>
</div>
