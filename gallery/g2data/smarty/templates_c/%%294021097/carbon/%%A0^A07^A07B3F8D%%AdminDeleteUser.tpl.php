<?php /* Smarty version 2.6.20, created on 2011-09-12 08:23:22
         compiled from gallery:modules/core/templates/AdminDeleteUser.tpl */ ?>
<div class="gbBlock gcBackground1">
<h2> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Delete a User'), $this);?>
 </h2>
</div>
<?php if (isset ( $this->_tpl_vars['AdminDeleteUser']['numberOfItems'] ) && $this->_tpl_vars['AdminDeleteUser']['numberOfItems'] > 0): ?>
<div class="gbBlock">
<h3>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "User %s is the owner of %s items.",'arg1' => $this->_tpl_vars['AdminDeleteUser']['user']['userName'],'arg2' => $this->_tpl_vars['AdminDeleteUser']['numberOfItems']), $this);?>

</h3>
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Delete user <strong>%s</strong> and...",'arg1' => $this->_tpl_vars['AdminDeleteUser']['user']['userName']), $this);?>

<table class="gbDataTable"><tr>
<td>
<input type="radio" id="rbAssignNewOwner" checked="checked"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[deletionVariant]"), $this);?>
" value="assignNewOwner"/>
</td><td>
<label for="rbAssignNewOwner">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Assign a new owner for all items of %s",'arg1' => $this->_tpl_vars['AdminDeleteUser']['user']['userName']), $this);?>

</label>
</td></tr><tr><td>
<input type="radio" id="rbDeleteItems"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[deletionVariant]"), $this);?>
" value="deleteItems"/>
</td><td>
<label for="rbDeleteItems"> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Delete all items of %s and assign a new owner for all remaining non empty albums. Items that %s doesn't have permission to delete will also be reassigned to a new owner.",'arg1' => $this->_tpl_vars['AdminDeleteUser']['user']['userName'],'arg2' => $this->_tpl_vars['AdminDeleteUser']['user']['userName']), $this);?>

</label>
</td>
</tr><tr>
<td></td>
<td>
<p> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "New owner (leaving blank means one of the Site Admins):"), $this);?>
 </p>
<input type="text" id="giFormUsername" size="20" autocomplete="off"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[text][newOwner]"), $this);?>
" value="<?php echo $this->_tpl_vars['form']['text']['newOwner']; ?>
"/>
<?php $this->_tag_stack[] = array('autoComplete', array('element' => 'giFormUsername'), $this); $_block_repeat=true; $this->_reg_objects['g'][0]->autoComplete($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>
<?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "view=core.SimpleCallback",'arg2' => "command=lookupUsername",'arg3' => "prefix=__VALUE__",'htmlEntities' => false), $this);?>

<?php $_obj_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_reg_objects['g'][0]->autoComplete($this->_tag_stack[count($this->_tag_stack)-1][1], $_obj_block_content, $this, $_block_repeat);} array_pop($this->_tag_stack);?>

<?php if (isset ( $this->_tpl_vars['form']['error']['text']['noSuchUser'] )): ?>
<div class="giError">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "User '%s' does not exist! Cannot assign items to a nonexistent user.",'arg1' => $this->_tpl_vars['form']['text']['newOwner']), $this);?>

</div>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['form']['error']['text']['newOwnerIsDeletedUser'] )): ?>
<div class="giError">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "The new owner must be a different user than the user we are deleting!"), $this);?>

</div>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['form']['error']['text']['newOwnerIsGuest'] )): ?>
<div class="giError">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "The new owner cannot be a Guest / Anonymous user!"), $this);?>

</div>
<?php endif; ?>
</td>
</tr></table>
</p>
</div>
<?php endif; ?>
<div class="gbBlock">
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Are you sure?"), $this);?>
 </h3>
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "This will completely remove <strong>%s</strong> from Gallery.  There is no undo!",'arg1' => $this->_tpl_vars['AdminDeleteUser']['user']['userName']), $this);?>

</p>
</div>
<div class="gbBlock gcBackground1">
<input type="hidden" name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => 'userId'), $this);?>
" value="<?php echo $this->_tpl_vars['AdminDeleteUser']['user']['id']; ?>
"/>
<input type="submit" class="inputTypeSubmit"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[action][delete]"), $this);?>
" value="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Delete'), $this);?>
"/>
<input type="submit" class="inputTypeSubmit"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[action][cancel]"), $this);?>
" value="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Cancel'), $this);?>
"/>
</div>