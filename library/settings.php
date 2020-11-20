<?php require_once('admin/cms.php');?>
<cms:extends 'anatomy/template.html' />

<cms:block 'set-template'>
	<cms:call 'template'
		title = 'Settings'
		icon = 'cog'
		order = '99'
		parent = 'settings'
		seo = '1'
	/>
</cms:block>

<?php COUCH::invoke( K_IGNORE_CONTEXT );?>