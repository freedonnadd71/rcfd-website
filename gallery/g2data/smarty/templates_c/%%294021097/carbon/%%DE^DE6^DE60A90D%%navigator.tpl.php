<?php /* Smarty version 2.6.20, created on 2010-10-09 07:57:15
         compiled from gallery:themes/carbon/templates/navigator.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'gallery:themes/carbon/templates/navigator.tpl', 5, false),array('modifier', 'escape', 'gallery:themes/carbon/templates/navigator.tpl', 75, false),)), $this); ?>
<?php $this->assign('prefix', ((is_array($_tmp=@$this->_tpl_vars['prefix'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, ""))); ?>
<?php $this->assign('suffix', ((is_array($_tmp=@$this->_tpl_vars['suffix'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, ""))); ?>
<div>
<table width="100%" cellpadding="0" cellspacing="0"><tr>
<td width="20%" align="left">
<div class="first-and-previous">
<table cellpadding="0" cellspacing="0"><tr>
<?php if (isset ( $this->_tpl_vars['theme']['navigator']['first'] )): ?>
<td>
<div class="buttonFirst"><a href="<?php echo $this->_reg_objects['g'][0]->url(array('params' => $this->_tpl_vars['theme']['navigator']['first']['urlParams']), $this);?>
"
title="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'First'), $this);?>
"></a></div>
</td>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['theme']['navigator']['back'] )): ?>    <td>
<div class="buttonPrev"><a href="<?php echo $this->_reg_objects['g'][0]->url(array('params' => $this->_tpl_vars['theme']['navigator']['back']['urlParams']), $this);?>
"
title="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Previous'), $this);?>
"></a></div>
</td>
<?php endif; ?>
<td>&nbsp;</td>
</tr></table>
</div>
</td>
<td align="center">
<?php if ($this->_tpl_vars['theme']['pageType'] == 'album'): ?>
<?php if (! empty ( $this->_tpl_vars['theme']['jumpRange'] )): ?>
<div class="gsPages">
<?php echo $this->_reg_objects['g'][0]->block(array('type' => "core.Pager"), $this);?>

</div>
<?php else: ?>
&nbsp;
<?php endif; ?>
<?php elseif ($this->_tpl_vars['theme']['pageType'] == 'photo'): ?>
<table cellpadding="0" cellspacing="0">
<tr>
<?php if (( isset ( $this->_tpl_vars['links'] ) || isset ( $this->_tpl_vars['theme']['itemLinks'] ) )): ?>
<?php if (! isset ( $this->_tpl_vars['links'] )): ?><?php $this->assign('links', $this->_tpl_vars['theme']['itemLinks']); ?><?php endif; ?>
<?php $_from = $this->_tpl_vars['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['itemLink']):
?>
<?php if ($this->_tpl_vars['itemLink']['moduleId'] == 'cart'): ?>
<td class="gsActionIcon">
<div class="buttonCart"><a href="<?php echo $this->_reg_objects['g'][0]->url(array('params' => $this->_tpl_vars['itemLink']['params']), $this);?>
"
title="<?php echo $this->_tpl_vars['itemLink']['text']; ?>
"></a></div>
</td>
<?php elseif ($this->_tpl_vars['itemLink']['moduleId'] == 'comment'): ?>
<?php if ($this->_tpl_vars['itemLink']['params']['view'] == "comment.AddComment"): ?>
<td class="gsActionIcon">
<div class="buttonAddComment"><a href="<?php echo $this->_reg_objects['g'][0]->url(array('params' => $this->_tpl_vars['itemLink']['params']), $this);?>
"
title="<?php echo $this->_tpl_vars['itemLink']['text']; ?>
"></a></div>
</td>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['theme']['params']['photoProperties'] && $this->_tpl_vars['showExifLink']): ?>
<td class="gsActionIcon">
<div class="buttonExif"><a href="javascript:void(0);"
onclick="toggleExif('photo','exif'); return false;"
title="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Photo Properties'), $this);?>
"></a></div>
</td>
<?php endif; ?>
<?php if ($this->_tpl_vars['theme']['params']['fullSize'] && ! empty ( $this->_tpl_vars['theme']['sourceImage'] ) && count ( $this->_tpl_vars['theme']['imageViews'] ) > 1): ?>
<?php ob_start(); ?><?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "view=core.DownloadItem",'arg2' => "itemId=".($this->_tpl_vars['theme']['sourceImage']['id'])), $this);?>
<?php $this->_smarty_vars['capture']['url'] = ob_get_contents(); ob_end_clean(); ?>
<td class="gsActionIcon">
<div class="buttonPopup"><a href="<?php echo $this->_smarty_vars['capture']['url']; ?>
" target="_blank"
onclick="popImage(this.href, '<?php echo ((is_array($_tmp=$this->_tpl_vars['theme']['item']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
'); return false;"
title="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Full Size'), $this);?>
"></a></div>
</td>
<?php endif; ?>
</tr>
</table>
<?php endif; ?>
</td>
<td width="20%" align="right" >
<div class="next-and-last">
<table cellpadding="0" cellspacing="0"><tr>
<td>&nbsp;</td>
<?php if (isset ( $this->_tpl_vars['theme']['navigator']['next'] )): ?>    <td>
<div class="buttonNext"><a href="<?php echo $this->_reg_objects['g'][0]->url(array('params' => $this->_tpl_vars['theme']['navigator']['next']['urlParams']), $this);?>
"
title="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Next'), $this);?>
"></a></div>
</td>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['theme']['navigator']['last'] )): ?>
<td>
<div class="buttonLast"><a href="<?php echo $this->_reg_objects['g'][0]->url(array('params' => $this->_tpl_vars['theme']['navigator']['last']['urlParams']), $this);?>
"
title="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Last'), $this);?>
"></a></div>
</td>
<?php endif; ?>
</tr></table>
</div>
</td>
</tr></table>
</div>