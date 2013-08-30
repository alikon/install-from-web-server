<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$category_sidebar 		= new JLayoutFile('joomla.apps.category_sidebar');
$extensions_imagegrid 	= new JLayoutFile('joomla.apps.extensions_imagegrid');
$extensions_singlegrid 	= new JLayoutFile('joomla.apps.extensions_singlegrid');
$extensions_full	 	= new JLayoutFile('joomla.apps.extensions_full');
$advanced_search	 	= new JLayoutFile('joomla.apps.advanced_search');
$simple_search			= new JLayoutFile('joomla.apps.simple_search');
$extension_data			= array('extensions' => $this->extensions, 'breadcrumbs' => $this->breadcrumbs, 'params' => $this->params);
?>
<script type="text/javascript" src="<?php echo JURI::root(); ?>components/com_apps/views/dashboard/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="<?php echo JURI::root(); ?>components/com_apps/views/dashboard/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo JURI::root(); ?>components/com_apps/views/dashboard/js/jquery.japps.js"></script>

<div class="com-apps-container">
<div class="row-fluid">
	<div class="span3">
		<?php echo $category_sidebar->render($this->categories); ?>
	</div> 
	<div class="span9">
		<div class="row-fluid">
			<div class="span6">
				<?php echo $simple_search->render(array()); ?>
			</div>
			<div class="span6">
				<?php //echo $advanced_search->render(array()); ?>
			</div>
		</div>

		<?php echo $extensions_full->render($extension_data); ?>
	</div>
</div>
</div>
