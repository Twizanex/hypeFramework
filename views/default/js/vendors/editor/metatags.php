<script type="text/javascript" src="<?php echo elgg_get_site_url() . 'mod/hypeFramework/views/default/js/vendors/editor/jquery.cleditor.min.js' ?>"></script>
<link type="text/css" href="<?php echo elgg_get_site_url() . 'mod/hypeFramework/views/default/js/vendors/editor/jquery.cleditor.css' ?>" rel="stylesheet" />
<script type="text/javascript" src="<?php echo elgg_get_site_url() . 'mod/hypeFramework/views/default/js/vendors/editor/jquery.cleditor.table.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo elgg_get_site_url() . 'mod/hypeFramework/views/default/js/vendors/editor/jquery.cleditor.icon.min.js' ?>"></script>
<?php
if (elgg_is_active_plugin('embed') || elgg_is_active_plugin('noelab_video_embedly')) {
	echo elgg_view('js/vendors/editor/jquery.cleditor.embed');
}
?>
<script type="text/javascript">
<?php
echo elgg_view('js/vendors/editor/editor');
?>
	elgg.register_hook_handler('success', 'ajax', framework.editor.init);
	elgg.trigger_hook('success', 'ajax');
</script>
