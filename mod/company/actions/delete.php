<?php

gatekeeper();

$company_guid = get_input('company_guid');
if ($company_guid) {
    $company = get_entity($company_guid);
} else {
    $company = NULL;
    $result = false;
}

if ($company->canEdit()) {
    $result = $company->delete();
} else {
    $result = false;
}

if ($result) {
    system_message(elgg_echo('company:deletesuccess'));
    forward('comp/all');
} else {
    register_error(elgg_echo('company:noprivileges'));
    forward($_SERVER['HTTP_REFERER']);
}

?>
