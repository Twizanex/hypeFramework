<?php
/**
 * Elgg Input Hint View
 *
 * @uses $vars['hint'] Hint options
 */

if (!isset($vars['text'])) {
	return true;
}

$vars['title'] = $vars['text'];
unset($vars['text']);

$text = elgg_view_icon('info');

if (isset($vars['class'])) {
	$vars['class'] = "elgg-input-hint {$vars['class']}";
} else {
	$vars['class'] = "elgg-input-hint";
}

echo '<span ' . elgg_format_attributes(elgg_clean_vars($vars)) . '>' . $text . '</span>';