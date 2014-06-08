<?php
$site_url = elgg_get_site_url();

?>
<div class="elgg-head clearfix resumesep">
<dl>
<dd><span><?php echo $vars['page_ower']->name; ?></span> </dd>
<?php
echo "<dd class=\"\">  </dd>";
if ($vars['page_ower'] == elgg_get_logged_in_user_entity() && elgg_in_context('resume_view') ) //
  echo "<dd class=\"leftspace \"><a href=\"" .$site_url . "resume/edit/" . $vars['page_ower']->username . "\")>" . elgg_echo("resume:edit") . "</a><dd>";
//else
//  echo "<dd><a href=\"" .$site_url . "resume/view/" . $vars['page_ower']->username . "\")>" . elgg_echo("resume:view") . "</a><dd>";
echo "<dd class=\" leftspace \">  </dd>";
echo "<dd class=\"leftspace \"><a href=\"" . $site_url . "profile/" . $vars['page_ower']->username . "\")>" . elgg_echo("resume:profile:goto") . "</a><dd>";
?>

</dl>
</div>