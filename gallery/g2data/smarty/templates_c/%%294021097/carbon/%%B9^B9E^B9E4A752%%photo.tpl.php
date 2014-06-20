<?php /* Smarty version 2.6.20, created on 2010-10-09 07:57:15
         compiled from gallery:themes/carbon/templates/photo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'trim', 'gallery:themes/carbon/templates/photo.tpl', 14, false),array('modifier', 'markup', 'gallery:themes/carbon/templates/photo.tpl', 129, false),)), $this); ?>
<?php if (! empty ( $this->_tpl_vars['theme']['imageViews'] )): ?>
<?php $this->assign('image', $this->_tpl_vars['theme']['imageViews'][$this->_tpl_vars['theme']['imageViewsIndex']]); ?>
<?php endif; ?>
<?php $this->assign('showExifLink', false); ?>
<?php if ($this->_tpl_vars['theme']['params']['photoProperties']): ?>
<?php $_from = $this->_tpl_vars['theme']['params']['photoBlocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
<?php if ($this->_tpl_vars['block']['0'] == 'exif.ExifInfo'): ?>
<?php ob_start(); ?><?php echo $this->_reg_objects['g'][0]->block(array('type' => $this->_tpl_vars['block']['0'],'params' => $this->_tpl_vars['block']['1']), $this);?>
<?php $this->_smarty_vars['capture']['exifBlock'] = ob_get_contents(); ob_end_clean(); ?>
<?php if (((is_array($_tmp=$this->_smarty_vars['capture']['exifBlock'])) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp))): ?>
<?php $this->assign('showExifLink', true); ?>
<div id="exif" class="gcPopupBackground"
style="position:absolute; left:0px; top:0px; padding:1px; visibility:hidden; z-index:5000">
<table cellspacing="0" cellpadding="0">
<tr>
<td style="padding-left:5px;">
<h2><?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Exif'), $this);?>
</h2>
</td>
<td align="right">
<div class="buttonClose"><a href="javascript:void(0);"
onclick="toggleExif('photo','exif'); return false;"
title="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Close'), $this);?>
"></a></div>
</td>
</tr>
<tr>
<td colspan="2" class="gcBackground2" style="padding-bottom:5px;">
<?php echo $this->_smarty_vars['capture']['exifBlock']; ?>

</td>
</tr>
</table>
</div>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<table class="gcBackground1" width="100%" cellspacing="0" cellpadding="0">
<tr valign="top">
<td>
<div id="gsContent" class="gcBorder1">
<div class="gbBlockTop">
<table>
<tr>
<td class="gsActionIcon">
<div class="buttonShowSidebar"><a href="<?php echo $this->_reg_objects['g'][0]->url(array('params' => $this->_tpl_vars['theme']['pageUrl'],'arg1' => "jsWarning=true"), $this);?>
"
onclick="slideIn('sidebar'); return false;"
title="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Show Sidebar'), $this);?>
"></a></div>
</td>
<?php if (( isset ( $this->_tpl_vars['links'] ) || isset ( $this->_tpl_vars['theme']['itemLinks'] ) )): ?>
<?php if (! isset ( $this->_tpl_vars['links'] )): ?><?php $this->assign('links', $this->_tpl_vars['theme']['itemLinks']); ?><?php endif; ?>
<?php $_from = $this->_tpl_vars['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['itemLink']):
?>
<?php if ($this->_tpl_vars['itemLink']['moduleId'] == 'slideshow'): ?>
<td class="gsActionIcon">
<div class="buttonViewSlideshow"><?php echo $this->_reg_objects['g'][0]->itemLink(array('link' => $this->_tpl_vars['itemLink'],'title' => ($this->_tpl_vars['itemLink']['text']),'text' => "",'class' => ""), $this);?>
</div>
</td>
<?php elseif ($this->_tpl_vars['itemLink']['moduleId'] == 'comment'): ?>
<?php if ($this->_tpl_vars['itemLink']['params']['view'] == "comment.ShowAllComments"): ?>
<td class="gsActionIcon">
<div class="buttonViewComments"><?php echo $this->_reg_objects['g'][0]->itemLink(array('link' => $this->_tpl_vars['itemLink'],'title' => ($this->_tpl_vars['itemLink']['text']),'text' => "",'class' => ""), $this);?>
</div>
</td>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
</tr>
</table>
</div>
<div class="gsContentPhoto">
<table align="center" cellpadding="0" cellspacing="0">
<?php if ($this->_tpl_vars['theme']['params']['navigatorPhotoTop']): ?>
<tr>
<td class="gbNavigatorPhoto">
<div class="gbNavigator">
<?php echo $this->_reg_objects['g'][0]->theme(array('include' => "navigator.tpl"), $this);?>

</div>
</td>
<td>&nbsp;</td>
</tr>
<?php endif; ?>
<tr>
<td>
<div id="gsImageView" class="gbBlock">
<?php if (! empty ( $this->_tpl_vars['theme']['imageViews'] )): ?>
<?php ob_start(); ?>
<a href="<?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "view=core.DownloadItem",'arg2' => "itemId=".($this->_tpl_vars['theme']['item']['id']),'forceFullUrl' => true,'forceSessionId' => true), $this);?>
">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Download %s",'arg1' => $this->_tpl_vars['theme']['sourceImage']['itemTypeName']['1']), $this);?>

</a>
<?php $this->_smarty_vars['capture']['fallback'] = ob_get_contents(); ob_end_clean(); ?>
<?php if (( $this->_tpl_vars['image']['viewInline'] )): ?>
<?php if (isset ( $this->_tpl_vars['theme']['photoFrame'] )): ?>
<?php $this->_tag_stack[] = array('container', array('type' => "imageframe.ImageFrame",'frame' => $this->_tpl_vars['theme']['photoFrame'],'width' => $this->_tpl_vars['image']['width'],'height' => $this->_tpl_vars['image']['height']), $this); $_block_repeat=true; $this->_reg_objects['g'][0]->container($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>
<div id="photo">
<?php echo $this->_reg_objects['g'][0]->image(array('id' => "%ID%",'item' => $this->_tpl_vars['theme']['item'],'image' => $this->_tpl_vars['image'],'fallback' => $this->_smarty_vars['capture']['fallback'],'class' => "%CLASS%"), $this);?>

</div>
<?php $_obj_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_reg_objects['g'][0]->container($this->_tag_stack[count($this->_tag_stack)-1][1], $_obj_block_content, $this, $_block_repeat);} array_pop($this->_tag_stack);?>

<?php else: ?>
<div id="photo">
<?php echo $this->_reg_objects['g'][0]->image(array('item' => $this->_tpl_vars['theme']['item'],'image' => $this->_tpl_vars['image'],'fallback' => $this->_smarty_vars['capture']['fallback']), $this);?>

</div>
<?php endif; ?>
<?php else: ?>
<?php echo $this->_smarty_vars['capture']['fallback']; ?>

<?php endif; ?>
<?php else: ?>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "There is nothing to view for this item."), $this);?>

<?php endif; ?>
</div>
</td>
<td align="left" width="240" valign="top">
<?php if ($this->_tpl_vars['theme']['params']['showMicroThumbs']): ?>
<div class="gsContentDetail gcBorder1">
<div class="gbNavigatorMicroThums">
<?php echo $this->_reg_objects['g'][0]->theme(array('include' => "navigatorMicroThumbs.tpl"), $this);?>

</div>
</div>
<?php endif; ?>
<div class="gsContentDetail">
<div class="gbBlock">
<?php if (! empty ( $this->_tpl_vars['theme']['item']['title'] )): ?>
<h2> <?php echo ((is_array($_tmp=$this->_tpl_vars['theme']['item']['title'])) ? $this->_run_mod_handler('markup', true, $_tmp) : smarty_modifier_markup($_tmp)); ?>
 </h2>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['theme']['item']['description'] )): ?>
<p class="giDescription">
<?php echo ((is_array($_tmp=$this->_tpl_vars['theme']['item']['description'])) ? $this->_run_mod_handler('markup', true, $_tmp) : smarty_modifier_markup($_tmp)); ?>

</p>
<?php endif; ?>
</div>
<div class="gbBlock">
<?php echo $this->_reg_objects['g'][0]->block(array('type' => "core.ItemInfo",'item' => $this->_tpl_vars['theme']['item'],'showDate' => true,'showOwner' => $this->_tpl_vars['theme']['params']['showImageOwner'],'class' => 'giInfo'), $this);?>

</div>
<div class="gbBlock">
<?php $_from = $this->_tpl_vars['theme']['params']['photoUpperBlocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
<?php echo $this->_reg_objects['g'][0]->block(array('type' => $this->_tpl_vars['block']['0'],'params' => $this->_tpl_vars['block']['1']), $this);?>

<?php endforeach; endif; unset($_from); ?>
</div>
</div>
</td>
</tr>
<?php if ($this->_tpl_vars['theme']['params']['navigatorPhotoBottom']): ?>
<tr>
<td class="gbNavigatorPhoto">
<div class="gbNavigator">
<?php echo $this->_reg_objects['g'][0]->theme(array('include' => "navigator.tpl"), $this);?>

</div>
</td>
<td>&nbsp;</td>
</tr>
<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['theme']['pageUrl']['view'] != 'core.ShowItem' && $this->_tpl_vars['theme']['params']['dynamicLinks'] == 'jumplink'): ?>
<div class="gbBlock">
<a href="<?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "view=core.ShowItem",'arg2' => "itemId=".($this->_tpl_vars['theme']['item']['id'])), $this);?>
">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'View in original album'), $this);?>

</a>
</div>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['theme']['sourceImage'] ) && $this->_tpl_vars['theme']['sourceImage']['mimeType'] != $this->_tpl_vars['theme']['item']['mimeType']): ?>
<div class="gbBlock">
<a href="<?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "view=core.DownloadItem",'arg2' => "itemId=".($this->_tpl_vars['theme']['item']['id'])), $this);?>
">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Download %s in original format",'arg1' => $this->_tpl_vars['theme']['sourceImage']['itemTypeName']['1']), $this);?>

</a>
</div>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['theme']['params']['photoBlocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
<?php if (! $this->_tpl_vars['theme']['params']['photoProperties'] || $this->_tpl_vars['block']['0'] != 'exif.ExifInfo'): ?>
<?php echo $this->_reg_objects['g'][0]->block(array('type' => $this->_tpl_vars['block']['0'],'params' => $this->_tpl_vars['block']['1']), $this);?>

<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php echo $this->_reg_objects['g'][0]->block(array('type' => "core.EmergencyEditItemLink",'class' => 'gbBlock','checkBlocks' => "sidebar,photo,photoUpper"), $this);?>

</div>
</td>
</tr>
</table>
<?php if (! empty ( $this->_tpl_vars['theme']['params']['sidebarBlocks'] )): ?>
<?php echo $this->_reg_objects['g'][0]->theme(array('include' => "sidebar.tpl"), $this);?>

<?php endif; ?>