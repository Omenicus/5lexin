<?php

$company_guids = explode(',', get_input('companies'));
elgg_set_context('map');
$string = '';
if (is_array($company_guids) && sizeof($company_guids) > 0) {
    foreach ($company_guids as $company_guid) {
        $company = get_entity($company_guid);
        $string .= elgg_view_entity($company);
    }
}
if (empty($string)) {
    $string = elgg_echo('company:nocompaniesonthemap');
}

echo $string;
die();
?>
