<?php /* Smarty version 2.6.26, created on 2013-03-10 18:47:24
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', 'index.tpl', 6, false),array('function', 'message', 'index.tpl', 8, false),array('function', 'form_input', 'index.tpl', 9, false),array('function', 'form_submit', 'index.tpl', 11, false),)), $this); ?>
<h2>投稿</h2>
<?php if (count ( $this->_tpl_vars['errors'] ) > 0): ?>
  入力内容にエラーがあります。
<?php endif; ?>

<?php $this->_tag_stack[] = array('form', array('name' => 'form_comment','ethna_action' => 'commit')); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
  投稿内容：
  <?php echo smarty_function_message(array('name' => 'comment'), $this);?>
<br />
  <?php echo smarty_function_form_input(array('name' => 'comment'), $this);?>


  <?php echo smarty_function_form_submit(array(), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<h2>投稿内容</h2>
<?php echo $this->_tpl_vars['form']['comment']; ?>


<h2>みんなの投稿</h2>
<ul>
<?php $_from = $this->_tpl_vars['app']['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>
<li><?php echo $this->_tpl_vars['comment']; ?>
</li>
<?php endforeach; endif; unset($_from); ?>
</ul>
