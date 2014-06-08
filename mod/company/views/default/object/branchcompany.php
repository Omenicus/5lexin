<?php

if (isset($vars['entity']) &&
        $vars['entity'] instanceof ElggObject
        && $vars['entity']->getSubtype() == 'branchcompany') {
    //if (elgg_get_context() == "searchcomp") {
        echo elgg_view("company/branchlisting", $vars);
    //}
}
?>