<?php
/* Smarty version 3.1.43, created on 2022-08-29 21:46:53
  from '/var/www/html/sitePrestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_630d17ad68f326_91009027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64f2447d224dce27f2a06a6d597c222686dafbc6' => 
    array (
      0 => '/var/www/html/sitePrestashop/themes/classic/templates/page.tpl',
      1 => 1661797118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d17ad68f326_91009027 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1018499262630d17ad68a3f9_85558049', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1519605105630d17ad68af08_34054212 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1522992832630d17ad68a803_68791289 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1519605105630d17ad68af08_34054212', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1639882191630d17ad68d682_50748562 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_246525081630d17ad68dbc2_81802980 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_225702521630d17ad68d2b6_40499865 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1639882191630d17ad68d682_50748562', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_246525081630d17ad68dbc2_81802980', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_454253277630d17ad68e778_83655337 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_912147614630d17ad68e3e7_17682669 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_454253277630d17ad68e778_83655337', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1018499262630d17ad68a3f9_85558049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1018499262630d17ad68a3f9_85558049',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1522992832630d17ad68a803_68791289',
  ),
  'page_title' => 
  array (
    0 => 'Block_1519605105630d17ad68af08_34054212',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_225702521630d17ad68d2b6_40499865',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1639882191630d17ad68d682_50748562',
  ),
  'page_content' => 
  array (
    0 => 'Block_246525081630d17ad68dbc2_81802980',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_912147614630d17ad68e3e7_17682669',
  ),
  'page_footer' => 
  array (
    0 => 'Block_454253277630d17ad68e778_83655337',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1522992832630d17ad68a803_68791289', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_225702521630d17ad68d2b6_40499865', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_912147614630d17ad68e3e7_17682669', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
