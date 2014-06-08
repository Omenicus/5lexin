<?php
/**
 * Register the ElggDiscussionReply class for the object/discussion_reply subtype
 */

if (get_subtype_id('object', 'rWork')) {
	update_subtype('object', 'rWork', 'ElggWork');
} else {
	add_subtype('object', 'rWork', 'ElggWork');
}


if (get_subtype_id('object', 'rEdu')) {
	update_subtype('object', 'rEdu', 'ElggAcademic');
} else {
	add_subtype('object', 'rEdu', 'ElggAcademic');
}
