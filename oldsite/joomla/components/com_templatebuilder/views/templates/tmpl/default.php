<?php
/**
 * @version		1.0.0 Templatebuilder $
 * @package		Templatebuilder
 * @copyright	Copyright © 2012 - All rights reserved.
 * @license		GNU/GPL
 * @author		Nate Mason
 * @author mail	nate@fargodesignco.com
 *
 *
 * @MVC architecture generated by MVC generator tool at http://www.alphaplug.com
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// Your custom code here
$items = $this->items;

foreach($items as $i){

?>

<a href="<?php echo JRoute::_("index.php?option=com_templatebuilder&view=templates&layout=single&task=details&id=".$i->id) ?>"><?php echo $i->title ?></a>

<?  } ?>