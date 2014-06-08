<?php

global $CONFIG;

elgg_set_context('searchcomp');

switch ($vars['type']) {

    case 'owner' :
        $companies = getUserCompanies($vars['entity']->guid);
        break;

    case 'network' :
        $companies = getNetworkCompanies($vars['entity']->guid);
        break;

    default :
        $companies = getSiteCompanies();
        break;

}

foreach ($companies as $company) {
    echo elgg_view_entity($company);
}

elgg_set_context('companies');

?>
