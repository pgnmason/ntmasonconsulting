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
$item = $this->item;

$item->loadData();

jimport( 'joomla.filesystem.folder' );

$fonts = JFolder::folders(JPATH_COMPONENT.DS."assets".DS."fonts");



?>
<h1>Template Details</h1>
<dl style="margin-bottom:20px;">
	<dt><strong>Name</strong></dt><dd style="padding-left:20px"><?php echo $item->title?></dd>
	<dt><strong>Module Positions</strong></dt>
		<dd style="padding-left:20px">
		<?php 
			foreach($item->positions as $i){
				echo $i."<br />";
			}
		?>
		</dd>
	<dt><strong>Layouts</strong></dt>
	<dd style="padding-left:20px"><?php 
			foreach($item->layouts as $i){
				echo $i."<br />";
			}
		?>
	</dd>
		
</dl>





<form action="index.php" method="post" >
<table border="0">
<tr style="border:0px;" ><td style="border:0px; width:120px; padding:10px;" ><label>Desired Name</label></td><td style="border:0px; width:300px; padding:10px;"" > <input type="text" name="desired_name" style="width:300px; border:1px solid #ccc; padding:5px 10px;" /></td></tr>
<tr style="border:0px;" ><td style="border:0px; width:120px; padding:10px;"" ><label>Author Name</label></td><td style="border:0px; width:300px; padding:10px;"" > <input type="text" name="author_name"  style="width:300px; border:1px solid #ccc; padding:5px 10px;"  /></td></tr>
<tr style="border:0px;" ><td style="border:0px; width:120px; padding:10px;"" ><label>Author Email</label></td><td style="border:0px; width:300px; padding:10px;"" > <input type="text" name="author_email" style="width:300px; border:1px solid #ccc; padding:5px 10px;"  /></td></tr>
<tr style="border:0px;" >
	<td style="border:0px; width:120px; padding:10px;"" ><label>Fonts</label></td>
	<td style="border:0px; width:300px; padding:10px;"" >
		<select name="fonts[]" multiple="multiple" style="width: 322px; padding: 10px;">
			<?php foreach($fonts as $f){ ?>
			<option value="<?php echo $f ?>"><?php echo $f ?></option>
		  <?	}?>
		</select>
	</td>
</tr>


<tr style="border:0px"><td style="padding:10px; border:0px;"><input type="submit" value="Generate" style="border:1px solid #666; background-color:#ccc; padding:5px 8px; font-weight:bold;"/></td></tr>
</table>

<input type="hidden" name="option" value="<?php echo JRequest::getVar("option","com_templatebuilder")?>"/>
<input type="hidden" name="view" value="<?php echo JRequest::getVar("view","templates")?>"/>
<input type="hidden" name="task" value="generate"/>
<input type="hidden" name="id" value="<?php echo $item->id?>"/>
<input type="hidden" name="format" value="raw"/>


</form>