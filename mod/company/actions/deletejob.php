<?php

gatekeeper();

$job_guid = get_input('guid');
if ($job_guid) {
    $job = get_entity($job_guid);
    $company_guid=$job->company_guid;
} else {
    $job = NULL;
    $result = false;
}

if ($job&&$job->canEdit()) {
    $result = $job->delete();
} else {
    $result = false;
}

if ($result) {
    system_message(elgg_echo('company:deletesuccess'));
    forward('comp/view/'.$company_guid);
} else {
    register_error(elgg_echo('company:noprivileges'));
    forward($_SERVER['HTTP_REFERER']);
}

?>
