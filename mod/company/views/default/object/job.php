<?php

if (isset($vars['entity']) &&
        $vars['entity'] instanceof ElggObject
        && $vars['entity']->getSubtype() == 'job') {

        echo elgg_view("company/listingjob", $vars);

}
?>