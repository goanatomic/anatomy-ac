<?php require_once('admin/cms.php'); ?>
<cms:extends 'anatomy/template.html' />

<!-- Set template -->
<cms:block 'set-template'>
	<cms:call 'template'
		title = 'Index'
		icon = 'home'
		order = '0'
	/>
</cms:block>

<!-- Set tempalte editables -->
<cms:block 'editables'>
	<cms:block_parent />

	<cms:editable
		name = 'audio'
		label = 'Audio'
		type = 'file'
		order = '0'
	/>

</cms:block>

<?php COUCH::invoke( K_IGNORE_CONTEXT );?>