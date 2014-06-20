<?php /* Smarty version 2.6.20, created on 2010-10-26 12:30:17
         compiled from gallery:modules/slideshow/templates/Slideshow.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'markup', 'gallery:modules/slideshow/templates/Slideshow.tpl', 6, false),array('modifier', 'escape', 'gallery:modules/slideshow/templates/Slideshow.tpl', 6, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['Slideshow']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['items'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['items']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i']):
        $this->_foreach['items']['iteration']++;
?>
<a style="display: none" href="<?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "view=core.DownloadItem",'arg2' => "itemId=".($this->_tpl_vars['i']['image']['id']),'arg3' => "serialNumber=".($this->_tpl_vars['i']['image']['serialNumber'])), $this);?>
" rel="lyteshow[s]" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['i']['item']['title'])) ? $this->_run_mod_handler('markup', true, $_tmp) : smarty_modifier_markup($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['i']['item']['summary'])) ? $this->_run_mod_handler('markup', true, $_tmp) : smarty_modifier_markup($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" id="a<?php echo ($this->_foreach['items']['iteration']-1); ?>
">.</a>
<?php endforeach; endif; unset($_from); ?>
<script type="text/javascript">
function start(startElId) {
<?php if (! isset ( $this->_tpl_vars['Slideshow']['piclensVersion'] )): ?>
startLB(startElId);
<?php else: ?>
var p=PicLensLite;
p.setCallbacks({ onNoPlugins:function(){startLB(startElId)},
onExit:function(){location.href='<?php echo $this->_tpl_vars['Slideshow']['returnUrl']; ?>
' }
});
p.setLiteURLs({ swf:'<?php echo $this->_tpl_vars['Slideshow']['piclensSwfUrl']; ?>
' });
p.start({ feedUrl:'<?php echo $this->_tpl_vars['Slideshow']['mediaRssUrl']; ?>
',
guid:<?php echo $this->_tpl_vars['Slideshow']['startItemId']; ?>
,
pid:'2PWfB4lurT4g',
delay:10
});
<?php endif; ?>
}
<?php echo '
function startLB(startElId) {
if (typeof myLytebox != \'undefined\') {
myLytebox.slideInterval = 10000;
myLytebox.resizeSpeed = 10;
myLytebox.start(document.getElementById(startElId), true, false);
setTimeout(\'goBackOnStop()\', 1000);
} else {
setTimeout(\'startLB("\' + startElId + \'")\', 1000);
}
}
function goBackOnStop() {
var el = document.getElementById(\'lbOverlay\');
if (el && el.style.display != \'none\') {
setTimeout(\'goBackOnStop()\', 1000);
} else {
history.go(-1);
}
}
'; ?>

YAHOO.util.Event.addListener(window, 'load', function() { start("a<?php echo $this->_tpl_vars['Slideshow']['start']; ?>
"); }, false);
</script>