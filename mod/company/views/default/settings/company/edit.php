<?php

/* * * styler Theme for Elgg
 * (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
 *
 */

if (elgg_is_active_plugin('profile_manager')) {
    echo '<div><b>Allow the following user types to add new companies:<br></b></div>';
    $options = array(
        "type" => "object",
        "subtype" => CUSTOM_PROFILE_FIELDS_PROFILE_TYPE_SUBTYPE,
        "limit" => 0,
        "owner_guid" => $CONFIG->site_guid,
        "full_view" => false,
        "view_type_toggle" => false,
        "pagination" => false
    );

    $custom_profile_types = elgg_get_entities($options);
    foreach ($custom_profile_types as $custom_profile_type) {
        echo '<div>';
        $name = 'profile_type_' . $custom_profile_type->guid;
        echo '<label>' . $custom_profile_type->getTitle() . '</label><br>';
        echo elgg_view('input/radio', array(
           'name' => 'params[' . $name . ']',
           'value' => $vars['entity']->$name,
           'options' => array('Allow' => true, 'Forbid' => false)
        ));
        echo '</div>';
    }
}

?>
