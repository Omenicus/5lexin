<?php
/**
 * Object summary
 *
 * Sample output
 * <ul class="elgg-menu elgg-menu-entity"><li>Public</li><li>Like this</li></ul>
 * <h3><a href="">Title</a></h3>
 * <p class="elgg-subtext">Posted 3 hours ago by George</p>
 * <p class="elgg-tags"><a href="">one</a>, <a href="">two</a></p>
 * <div class="elgg-content">Excerpt text</div>
 *
 * @uses $vars['entity']    ElggEntity
 * @uses $vars['title']     Title link (optional) false = no title, '' = default
 * @uses $vars['metadata']  HTML for entity menu and metadata (optional)
 * @uses $vars['subtitle']  HTML for the subtitle (optional)
 * @uses $vars['tags']      HTML for the tags (default is tags on entity, pass false for no tags)
 * @uses $vars['content']   HTML for the entity content (optional)
 */

$entity = $vars['entity'];

$title_link = elgg_extract('title', $vars, '');
if ($title_link === '') {
	if (isset($entity->title)) {
		$text = $entity->title;
	} else {
		$text = $entity->name;
	}
	$params = array(
		'text' => elgg_get_excerpt($text, 100),
		'href' => $entity->getURL(),
		'is_trusted' => true,
	);
	$title_link = elgg_view('output/url', $params);
}

$metadata = elgg_extract('metadata', $vars, '');
$subtitle = elgg_extract('subtitle', $vars, '');
$content = elgg_extract('content', $vars, '');

$tags = elgg_extract('tags', $vars, '');
if ($tags === '') {
	$tags = elgg_view('output/tags', array('tags' => $entity->tags));
}

if ($metadata) {
	echo $metadata;
}
if ($title_link) {
	echo "<span>$title_link</span>";
}
echo "<span class=\"elgg-subtext\">$subtitle</span>";

$jobtitle='';


$title=elgg_get_metadata(array( 'metadata_name' => 'title', 'metadata_owner_guid' => $entity->getGUID() ));
if( $title )
  $jobtitle.=$title[0]->value;
//$jobtitle.=count($title);   
$org=elgg_get_metadata(array( 'metadata_name' => 'organisation', 'metadata_owner_guid' => $entity->getGUID() ));
$orgid=elgg_get_metadata(array( 'metadata_name' => 'organisationid', 'metadata_owner_guid' => $entity->getGUID() ));

if( $org && $orgid)
{
  //$jobtitle.=  "-1-";
  $company=get_entity($orgid[0]->value);
  $jobtitle.=  ' - <a href="'.$company->getURL().'">'.$company->name.'</a>';
}
elseif( $org )
{
  //$jobtitle.=  "-2-".count($org);
  $jobtitle.= ' - '.$org[0]->value;
}

echo "<div class=\"elgg-subtext\">$jobtitle</div>";

echo $tags;

echo elgg_view('object/summary/extend', $vars);

if ($content) {
	echo "<div class=\"elgg-content\">$content</div>";
}
