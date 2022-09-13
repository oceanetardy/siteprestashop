<?php
/* Smarty version 3.1.43, created on 2022-08-29 21:46:53
  from '/var/www/html/sitePrestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_630d17ad687395_08165721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '217b4f7aaa13294ff1d19e228ea6edea8e3d662e' => 
    array (
      0 => '/var/www/html/sitePrestashop/themes/classic/templates/index.tpl',
      1 => 1661797118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d17ad687395_08165721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_922035708630d17ad684ea5_50933048', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_547108881630d17ad6854a5_24626692 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_4534375630d17ad686138_21177168 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1324854284630d17ad685c87_61109840 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4534375630d17ad686138_21177168', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_922035708630d17ad684ea5_50933048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_922035708630d17ad684ea5_50933048',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_547108881630d17ad6854a5_24626692',
  ),
  'page_content' => 
  array (
    0 => 'Block_1324854284630d17ad685c87_61109840',
  ),
  'hook_home' => 
  array (
    0 => 'Block_4534375630d17ad686138_21177168',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_547108881630d17ad6854a5_24626692', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1324854284630d17ad685c87_61109840', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
