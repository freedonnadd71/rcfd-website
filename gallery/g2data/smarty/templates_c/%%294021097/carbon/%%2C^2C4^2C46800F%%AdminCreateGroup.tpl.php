<?php /* Smarty version 2.6.20, created on 2010-04-05 14:16:34
         compiled from gallery:modules/core/templates/AdminCreateGroup.tpl */ ?>
<div class="gbBlock gcBackground1">
<h2> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Create A New Group'), $this);?>
 </h2>
</div>
<div class="gbBlock">
<h4>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Group Name'), $this);?>

<span class="giSubtitle"> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "(required)"), $this);?>
 </span>
</h4>
<input type="text" name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[groupName]"), $this);?>
" value="<?php echo $this->_tpl_vars['form']['groupName']; ?>
"/>
<script type="text/javascript">
document.getElementById('siteAdminForm')['<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[groupName]"), $this);?>
'].focus();
</script>
<?php if (isset ( $this->_tpl_vars['form']['error']['groupName']['missing'] )): ?>
<div class="giError">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'You must enter a group name'), $this);?>

</div>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['form']['error']['groupName']['exists'] )): ?>
<div class="giError">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Group '%s' already exists",'arg1' => $this->_tpl_vars['form']['groupName']), $this);?>

</div>
<?php endif; ?>
</div>
<div class="gbBlock gcBackground1">
<input type="submit" class="inputTypeSubmit"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[action][create]"), $this);?>
" value="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Create Group'), $this);?>
"/>
<input type="submit" class="inputTypeSubmit"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[action][cancel]"), $this);?>
" value="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Cancel'), $this);?>
"/>
</div>