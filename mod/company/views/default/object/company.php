<?php

if (isset($vars['entity']) &&
        $vars['entity'] instanceof ElggObject
        && $vars['entity']->getSubtype() == 'company') {
    if (elgg_get_context() == "searchcomp") {
        echo elgg_view("company/listing", $vars);
    } else if (elgg_get_context() == "map") {
        echo elgg_view("company/maplisting", $vars);
    }
    else
    {
        echo elgg_view("company/listing", $vars);
    }
}
?>