<?php

$result = hj_framework_edit_object_action();

if ($result) {
	echo json_encode(array('guid' => $result['entity']->guid));
	forward($result['forward']);
} else {
	forward(REFERER);
}
