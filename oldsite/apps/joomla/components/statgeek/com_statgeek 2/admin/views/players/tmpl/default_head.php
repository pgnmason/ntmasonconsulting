<?php
/*------------------------------------------------------------------------
# default_head.php - Stat Geek Component
# ------------------------------------------------------------------------
# author    Nate Mason
# copyright Copyright (C) 2013. All Rights Reserved
# license   GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html
# website   www.bricklayertech.com
-------------------------------------------------------------------------*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

?>
<tr>
	<th width="5">
		<?php echo JText::_('ID'); ?>
	</th>
	<th width="20">
		<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
	</th>
	<th>
		<?php echo JText::_('First Name'); ?>
	</th>
	<th>
		<?php echo JText::_('Last Name'); ?>
	</th>
	<th>
		<?php echo JText::_('Team'); ?>
	</th>
    <th>
		<?php echo JText::_('Stats'); ?>
	</th>
</tr>