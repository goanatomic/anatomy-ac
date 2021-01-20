<?php require_once('admin/cms.php'); ?>
<cms:extends 'anatomy/template.html' />


<!-- Set template -->
<cms:block 'set-template'>
	<cms:call 'template'
		
	/>
</cms:block>



<!-- Editables -->
<cms:block 'editables'>
	<cms:block_parent />
	
</cms:block>



<!-- Config list view -->
<cms:block 'config-list'><cms:block_parent />

</cms:block>



<!-- Config form view -->
<cms:block 'config-form'><cms:block_parent />
	
</cms:block>



<?php COUCH::invoke( K_IGNORE_CONTEXT );?>