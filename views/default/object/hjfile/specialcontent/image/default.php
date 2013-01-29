<?php
/**
 * Display an image
 */

$image_url = "mod/hypeFramework/pages/file/icon.php?guid={$vars['entity']->getGUID()}&size=preview";
$image_url = elgg_format_url($image_url);
$download_url = "mod/hypeFramework/pages/file/icon.php?guid={$vars['entity']->getGUID()}";

if ($vars['full_view'] && $smallthumb = $vars['entity']->smallthumb) {
	echo <<<HTML
		<div class="file-photo">
			<a href="$download_url"><img class="elgg-photo" src="$image_url" /></a>
		</div>
HTML;
}
